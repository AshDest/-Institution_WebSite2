<?php

namespace App\Http\Livewire\Admin\Filliere;

use App\Models\Filliere;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddFillieres extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $designation;
    public $detail;
    public $photo;

    public $ids;


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
    public function save()
    {
        $this->validate();
        try {
            // Validate Form Request
            $imageHash = $this->photo->hashName();
            $manager =  new ImageManager();
            $manager->make($this->photo->getRealPath())->resize(365, 246)->save('assets/images/filliere/' . $imageHash);
            Filliere::create([
                'designation' => ucfirst(trans($this->designation)),
                'detail' => ucfirst(trans($this->detail)),
                'photo' => $imageHash,

            ])->save();
            $this->alert('success', 'Enregistrement Reussi');
            return redirect()->route('fillieres');
        } catch (\Exception $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    public function render()
    {
        return view('livewire.admin.filliere.add-fillieres');
    }
}