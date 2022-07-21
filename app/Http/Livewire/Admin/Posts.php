<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

    public $titre;
    public $content;
    public $image;

    public $ids;


    // protected $rules = [
    //     'titre' => 'required',
    //     'content' => 'required',
    //     'image' => 'image|max:1024',
    // ];

    // protected $message = [
    //     'titre.required' => 'Le titre est obligatoire',
    //     'content.required' => 'Le detail est obligatoire',
    //     'image.required' => 'Selectionner un fichier',
    // ];

    public function update()
    {
        $validatedData = $this->validate([
            'titre' => 'required',
            'content' => 'required',
            'image' => 'image|max:1024',
        ]);
        try {
            $this->image->storeAs('Post', $this->titre);
            Post::create($validatedData);
            $this->dispatchBrowserEvent('alert', [
                'type' => 'success',
                'message' => "Classe enregistée avec succes!!"
            ]);
        } catch (\Exception $e) {
            // Set Flash Message
            $this->dispatchBrowserEvent('alert', [
                'type' => 'error',
                'message' => "Quelque chose ne va pas lors de l'enregistrement de la classe'!! " . $e->getMessage()
            ]);
        }
    }


    // public function save()
    // {
    //     // $this->image->store('Posts');
    //     $this->validate();
    //     // Validate Form Request
    //     try {
    //         $this->image->store('Posts');
    //         Post::create([
    //             'titre' => ucfirst(trans($this->titre)),
    //             'content' => $this->content,
    //             'image' => $this->image,

    //         ])->save();
    //         $this->dispatchBrowserEvent('alert', [
    //             'type' => 'success',
    //             'message' => "Classe enregistée avec succes!!"
    //         ]);
    //         // Reset Form Fields After Creating departement
    //     } catch (\Exception $e) {

    //         dd($e->getMessage());
    //         // Set Flash Message
    //         $this->dispatchBrowserEvent('alert', [
    //             'type' => 'error',
    //             'message' => "Quelque chose ne va pas lors de l'enregistrement de la classe'!! " . $e->getMessage()
    //         ]);
    //         // Reset Form Fields After Creating departement
    //     }
    // }
    public function render()
    {
        $posts = Post::all();
        return view('livewire.admin.posts', ['posts' => $posts]);
    }
}
