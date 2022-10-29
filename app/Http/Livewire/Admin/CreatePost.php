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
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        try {
            $this->validate();
            // Validate Form Request
            $imageHash = $this->photo->hashName();
            $manager =  new ImageManager();
            $manager->make($this->photo->getRealPath())->resize(50, 50)->save('assets/images/post/' . $imageHash);
            Post::create([
                'titre' => ucfirst(trans($this->titre)),
                'content' => ucfirst(trans($this->content)),
                'image' => $imageHash,

            ])->save();
            $this->alert('success', 'Enregistrement Reussi');
            return redirect()->route('posts');
        } catch (\Exception $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }


    public function render()
    {
        return view('livewire.admin.create-post');
    }
}