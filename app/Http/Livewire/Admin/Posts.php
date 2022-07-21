<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{

    public $titre;
    public $content;
    public $image;

    public $ids;


    protected $rules = [
        'titre' => 'required',
        'content' => 'required',
        'image' => 'image|max:1024',
    ];

    protected $messages = [
        'titre.required' => 'Le titre est obligatoire',
        'content.required' => 'Le detail est obligatoire',
        'image.required' => 'Selectionner un fichier',
    ];

    public function save()
    {
        $this->validate();
        // Validate Form Request
        try {
            $this->image->storeAs('Posts', $this->titre);
            Post::create([
                'titre' => ucfirst(trans($this->titre)),
                'content' => ucfirst(trans($this->content)),
                'image' => ucfirst(trans($this->image)),

            ])->save();
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
        $posts = Post::all();
        return view('livewire.admin.posts', ['posts'=>$posts]);
    }
}
