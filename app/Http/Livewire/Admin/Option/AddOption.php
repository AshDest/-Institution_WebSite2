<?php

namespace App\Http\Livewire\Admin\Option;

use App\Models\Option;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddOption extends Component
{
    use LivewireAlert;
    public $designation;
    public $detail;

    protected $rules = [
        'designation' => 'required',
        'detail' => 'required',
    ];

    protected $messages = [
        'designation.required' => 'La designation  Option est obligatoire',
        'detail.required' => 'c champ est obligatoire',
    ];

    public function save()
    {
        $this->validate();
        try {
            Option::create([
                'designation' => ucfirst(trans($this->designation)),
                'detail' => ucfirst(trans($this->detail)),

            ])->save();
            $this->alert('success', 'Enregistrement Reussi');
            return redirect()->route('option');
        } catch (\Exception $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    public function render()
    {
        return view('livewire.admin.option.add-option');
    }
}