<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Posts extends Component
{
    use LivewireAlert;

    public $ids;
    protected $listeners = [
        'confirmed'
    ];

    public function confirmed()
    {
        Post::whereId($this->ids)->delete();
        $this->alert('success', 'Suppression avec Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }

    public function cancelled()
    {
        // Do something when cancel button is clicked
    }

    public function delete($id)
    {
        //
        $this->ids = $id;

        $this->confirm('Voulez vous supprimer?', [
            'onConfirmed' => 'confirmed',
        ]);
        dd($id);
    }

    public function render()
    {
        $posts = Post::all();
        return view('livewire.admin.posts', ['posts' => $posts]);
    }
}