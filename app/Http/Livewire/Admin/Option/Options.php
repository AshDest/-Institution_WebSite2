<?php

namespace App\Http\Livewire\Admin\Option;

use App\Models\Option;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Options extends Component
{
    use LivewireAlert;

    public $ids;
    protected $listeners = [
        'confirmed'
    ];

    public function confirmed()
    {
        Option::whereId($this->ids)->delete();
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
        $options = Option::all();
        return view('livewire.admin.option.options', ['options' => $options]);
    }
}