<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class CreatePost extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $titre;
    public $content;
    public $photo;

    public $ids;


    protected $rules = [
        'titre' => 'required',
        'content' => 'required',
        'photo' => 'image|max:70000|required|mimes:jpeg,png,jpg,gif',
    ];

    protected $messages = [
        'titre.required' => 'Le titre est obligatoire',
        'content.required' => 'Le detail est obligatoire',
        'photo.required' => 'Vous devez selectionner une image.',
        'photo.image' => 'Vous devez selectionner une image valide.',
        'photo.max' => 'La taille du fichier est trop grande.',
        'photo.mimes' => 'Image incorrect !',
    ];

    public function save()
    {
        dd('destin');
        $this->validate();
        // Validate Form Request
        $imageHash = $this->photo->hashName();
        $manager =  new ImageManager();
        $manager->make($this->photo->getRealPath())->resize(50, 50)->save('assets/img/post/' . $imageHash);
        try {
            Post::create([
                'titre' => ucfirst(trans($this->designation)),
                'content' => ucfirst(trans($this->description)),
                'image' => $imageHash,

            ])->save();
            // Set Flash Message
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Classe enregistée avec succes!!"
            ]);
            // Reset Form Fields After Creating departement
        } catch (\Exception $e) {

            dd($e->getMessage());
            // Set Flash Message
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => "Quelque chose ne va pas lors de l'enregistrement de la classe'!! " . $e->getMessage()
            ]);
            // Reset Form Fields After Creating departement
        }
    }

    public function render()
    {
        return view('livewire.admin.create-post');
    }
}