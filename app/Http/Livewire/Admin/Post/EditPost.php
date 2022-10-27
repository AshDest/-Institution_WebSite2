<?php

namespace App\Http\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditPost extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $titre;
    public $content;
    public $photo;

    public $ids;
    public $oldlogo;

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
        $vars = Post::find($this->ids);
        $this->titre = $vars->titre;
        $this->content = $vars->content;
        $this->oldlogo = $vars->image;
    }

    public function render()
    {
        return view('livewire.admin.post.edit-post');
    }
}