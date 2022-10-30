<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class AddEvents extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $titre;
    public $content;
    public $lieu;
    public $date;
    public $heure;
    public $image;

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
    public function save()
    {
        $this->validate();
        // Validate Form Request
        try {
            $imageHash = $this->image->hashName();
            $manager =  new ImageManager();
            $manager->make($this->image->getRealPath())->resize(214, 197)->save('assets/images/events/' . $imageHash);
            Event::create([
                'titre' => ucfirst(trans($this->titre)),
                'content' => ucfirst(trans($this->content)),
                'lieu' => ucfirst(trans($this->lieu)),
                'date' => $this->date,
                'heure' => $this->heure,
                'image' => $imageHash,

            ])->save();
            $this->alert('success', 'Enregistrement Reussi');
            return redirect()->route('events');
        } catch (\Exception $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    public function render()
    {
        return view('livewire.admin.event.add-events');
    }
}