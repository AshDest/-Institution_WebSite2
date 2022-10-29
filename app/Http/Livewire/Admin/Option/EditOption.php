<?php

namespace App\Http\Livewire\Admin\Option;

use App\Models\Option;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditOption extends Component
{
    use LivewireAlert;
    public $designation;
    public $detail;

    public $ids;

    protected $rules = [
        'designation' => 'required',
        'detail' => 'required',
    ];

    protected $messages = [
        'designation.required' => 'La designation  Option est obligatoire',
        'detail.required' => 'c champ est obligatoire',
    ];

    public function edit()
    {
        try {
            Option::find($this->ids)->fill([
                'designation' => ucfirst(trans($this->designation)),
                'detail' => ucfirst(trans($this->detail)),
            ])->save();
            $this->alert('success', 'Option Modifier avec Success!');
            return redirect()->route('option');
        } catch (\Throwable $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    public function mount()
    {
        $vars = Option::find($this->ids);
        $this->designation = $vars->designation;
        $this->detail = $vars->detail;
    }
    public function render()
    {
        return view('livewire.admin.option.edit-option');
    }
}