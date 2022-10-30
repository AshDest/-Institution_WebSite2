<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class EditEvent extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $titre;
    public $content;
    public $lieu;
    public $date;
    public $heure;
    public $image;

    public $ids;
    public $oldlogo;

    protected $rules = [
        'titre' => 'required',
        'content' => 'required',
        'lieu' => 'required',
        'date' => 'required',
        'heure' => 'required',
        'image' => 'image|max:70000|required|mimes:jpeg,png,jpg,gif',
    ];

    protected $messages = [
        'titre.required' => 'Le titre est obligatoire',
        'content.required' => 'Le detail est obligatoire',
        'lieu.required' => 'Ce champs est obligatoire',
        'date.required' => 'Ce champ est obligatoire',
        'heure.required' => 'Ce champ est obligatoire',
        'image.required' => 'Vous devez selectionner une image.',
        'image.image' => 'Vous devez selectionner une image valide.',
        'image.max' => 'La taille du fichier est trop grande.',
        'image.mimes' => 'Image incorrect !',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function edit()
    {

        try {
            if ($this->image != null) {
                $this->validate();
                $imageHash = $this->image->hashName();
                $manager =  new ImageManager();
                $manager->make($this->image->getRealPath())->resize(214, 197)->save('assets/images/events/' . $imageHash);
                Event::find($this->ids)->fill([
                    'titre' => ucfirst(trans($this->titre)),
                    'content' => ucfirst(trans($this->content)),
                    'lieu' => ucfirst(trans($this->lieu)),
                    'date' => $this->date,
                    'heure' => $this->heure,
                    'image' => $imageHash,
                ])->save();
                $this->cleanupOldLogo();
            } else {
                Event::find($this->ids)->fill([
                    'titre' => ucfirst(trans($this->titre)),
                    'content' => ucfirst(trans($this->content)),
                    'lieu' => ucfirst(trans($this->lieu)),
                    'date' => $this->date,
                    'heure' => $this->heure,
                ])->save();
            }
            $this->alert('success', 'Event Modifier avec Success!');
            return redirect()->route('events');
        } catch (\Throwable $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    //unlink or delete file
    public function cleanupOldLogo()
    {
        if ($this->oldlogo != null) {
            $path = public_path('assets/images/post/' . $this->oldlogo);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    public function mount()
    {
        $vars = Event::find($this->ids);
        $this->titre = $vars->titre;
        $this->content = $vars->content;
        $this->lieu = $vars->lieu;
        $this->date = $vars->date;
        $this->heure = $vars->heure;
        $this->oldlogo = $vars->image;
    }

    public function render()
    {
        return view('livewire.admin.event.edit-event');
    }
}