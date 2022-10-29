<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\Communique;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class EditNews extends Component
{
    use LivewireAlert;
    public $titre;
    public $detail;

    public $ids;

    protected $rules = [
        'titre' => 'required',
        'detail' => 'required',
    ];

    protected $messages = [
        'titre.required' => 'La designation  Option est obligatoire',
        'detail.required' => 'c champ est obligatoire',
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function edit()
    {
        try {
            Communique::find($this->ids)->fill([
                'titre' => ucfirst(trans($this->titre)),
                'detail' => ucfirst(trans($this->detail)),
            ])->save();
            $this->alert('success', 'Communique Modifier avec Success!');
            return redirect()->route('news');
        } catch (\Throwable $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    public function mount()
    {
        $vars = Communique::find($this->ids);
        $this->titre = $vars->titre;
        $this->detail = $vars->detail;
    }
    public function render()
    {
        return view('livewire.admin.news.edit-news');
    }
}