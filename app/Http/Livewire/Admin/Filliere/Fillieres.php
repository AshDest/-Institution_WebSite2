<?php

namespace App\Http\Livewire\Admin\Filliere;

use App\Models\Filliere;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Fillieres extends Component
{
    use LivewireAlert;

    public $ids;
    protected $listeners = [
        'confirmed'
    ];

    public function confirmed()
    {
        Filliere::whereId($this->ids)->delete();
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
        $fillieres = Filliere::all();
        return view('livewire.admin.filliere.fillieres', ['fillieres' => $fillieres]);
    }
}