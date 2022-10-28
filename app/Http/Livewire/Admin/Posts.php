<?php

namespace App\Http\Livewire\Admin;

use App\Models\Post;
use Livewire\Component;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

    protected $listeners = [
        'confirmed'
    ];

    public function alertdelete($id)
    {
        $this->display_delete = $id;
        $this->alert('warning', 'How are you today?', [
            'showConfirmButton' => true,
            'confirmButtonText' => 'Suprimer',
            'showCancelButton' => true,
            'cancelButtonText' => 'Cancel',
            'onConfirmed' => 'confirmed',
            'onDismissed' => 'cancelled',
            'position' => 'center'
        ]);
        //  $this->display_delete = $id;
        // dd( $this->display_delete );

    }
    public function confirmed()
    {
        $vars = Post::whereId($this->ids)->delete();
        if ($vars) {
            // User::where('patient_id ',$this->display_delete)->delete();
            $this->alert('success', 'Post bien Suprime!');
            $this->cleanupOldLogo();
        }
        return redirect()->route('posts');
    }
    public function render()
    {
        $posts = Post::all();
        return view('livewire.admin.posts', ['posts' => $posts]);
    }
}