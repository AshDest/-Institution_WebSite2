<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\Communique;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class News extends Component
{
    use LivewireAlert;

    public $ids;
    protected $listeners = [
        'confirmed'
    ];

    public function confirmed()
    {
        Communique::whereId($this->ids)->delete();
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
        $this->ids = $id;
        $this->confirm('Voulez vous supprimer?', [
            'onConfirmed' => 'confirmed',
        ]);
    }
    public function render()
    {
        $news = Communique::all();
        return view('livewire.admin.news.news', ['news' => $news]);
    }
}