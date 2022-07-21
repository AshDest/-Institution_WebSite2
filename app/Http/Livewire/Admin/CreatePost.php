<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;

class CreatePost extends Component
{
    public $titre;
    public $content;
    public $image;

    public $ids;


    protected $rules = [
        'titre' => 'required',
        'content' => 'required',
        'image' => 'required',
    ];

    protected $messages = [
        'titre.required' => 'Le titre est obligatoire',
        'content.required' => 'Le detail est obligatoire',
        'image.required' => 'Selectionner un fichier',
    ];

    public function save()
    {
        dd('destin');
        $this->validate();
        // Validate Form Request
        try {
            $this->image->storeAs('Posts', $this->titre);
            Post::create([
                'titre' => ucfirst(trans($this->designation)),
                'content' => ucfirst(trans($this->description)),
                'image' => ucfirst(trans($this->type_classe)),

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
