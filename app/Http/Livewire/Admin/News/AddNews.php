<?php

namespace App\Http\Livewire\Admin\News;

use App\Models\Communique;
use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class AddNews extends Component
{
    use LivewireAlert;
    public $titre;
    public $detail;

    protected $rules = [
        'titre' => 'required',
        'detail' => 'required',
    ];

    protected $messages = [
        'titre.required' => 'Le Titre est obligatoire',
        'detail.required' => 'c champ est obligatoire',
    ];

    public function save()
    {
        $this->validate();
        try {
            Communique::create([
                'titre' => ucfirst(trans($this->titre)),
                'detail' => ucfirst(trans($this->detail)),
            ])->save();
            $this->alert('success', 'Enregistrement Reussi');
            return redirect()->route('news');
        } catch (\Exception $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    public function render()
    {
        return view('livewire.admin.news.add-news');
    }
}