<?php

namespace App\Http\Livewire\Admin\Filliere;

use App\Models\Filliere;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditFillieres extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $designation;
    public $detail;
    public $photo;

    public $ids;
    public $oldlogo;

    protected $rules = [
        'designation' => 'required',
        'detail' => 'required|min:20',
        'photo' => 'image|max:70000|required|mimes:jpeg,png,jpg,gif',
    ];

    protected $messages = [
        'designation.required' => 'Le designation est obligatoire',
        'detail.required' => 'Le detail est obligatoire',
        'detail.min' => 'Nombre de carractères Insuffisants',
        'photo.required' => 'Vous devez selectionner une image.',
        'photo.image' => 'Vous devez selectionner une image valide.',
        'photo.max' => 'La taille du fichier est trop grande.',
        'photo.mimes' => 'Image incorrect !',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function edit()
    {
        try {
            if ($this->photo != null) {
                $this->validate();
                $imageHash = $this->photo->hashName();
                $manager =  new ImageManager();
                $manager->make($this->photo->getRealPath())->resize(365, 246)->save('assets/images/filliere/' . $imageHash);
                Filliere::find($this->ids)->fill([
                    'designation' => ucfirst(trans($this->designation)),
                    'detail' => ucfirst(trans($this->detail)),
                    'photo' => $imageHash,
                ])->save();
                $this->cleanupOldLogo();
            } else {
                Filliere::find($this->ids)->fill([
                    'designation' => ucfirst(trans($this->designation)),
                    'detail' => ucfirst(trans($this->detail)),
                ])->save();
            }
            $this->alert('success', 'Filliere Modifier avec Success!');
            return redirect()->route('fillieres');
        } catch (\Throwable $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }


    //unlink or delete file
    public function cleanupOldLogo()
    {
        if ($this->oldlogo != null) {
            $path = public_path('assets/images/filliere/' . $this->oldlogo);
            if (file_exists($path)) {
                unlink($path);
            }
        }
    }

    public function mount()
    {
        $vars = Filliere::find($this->ids);
        $this->designation = $vars->designation;
        $this->detail = $vars->detail;
        $this->oldlogo = $vars->photo;
    }
    public function render()
    {
        return view('livewire.admin.filliere.edit-fillieres');
    }
}