<?php

namespace App\Http\Livewire\Admin;

use App\Models\Citation;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class Citations extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $noms;
    public $citation;
    public $avatar;
    public $active;
    public $grade;
    protected $rules = [
        'noms' => 'required',
        'citation' => 'required|min:10',
        'avatar' => 'image|min:2|mimes:jpeg,png,jpg',
    ];
    protected $messages = [
        'noms.required' => 'Ce champ est obligatoir',
        'citation.required' => 'Ce champ est obligatoire',
        'citation.min' => 'Ce champ doit contenir au moins 10 caractères',
        'avatar.required' => 'Vous devez selectionner une image.',
        'avatar.image' => 'Vous devez selectionner une image valide.',
        'avatar.min' => 'La taille du fichier est trop petite.',
        'avatar.mimes' => 'Image incorrect !',
    ];
    public function resetField()
    {
        $this->avatar = '';
        $this->noms = '';
        $this->citation = '';
        $this->grade = '';
    }
    public function save()
    {
        $this->validate();
        try {
            if ($this->avatar) {
                $imageHash = $this->avatar->hashName();
                $manager =  new ImageManager();
                $manager->make($this->avatar->getRealPath())->resize(1920, 820)->save('assets/images/citation/' . $imageHash);
                Citation::create([
                    'noms' => ucfirst(trans($this->noms)),
                    'citation' => ucfirst(trans($this->citation)),
                    'avatar' => $imageHash,
                    'grade' => $this->grade,
                ])->save();
            } else {
                Citation::create([
                    'noms' => ucfirst(trans($this->noms)),
                    'citation' => ucfirst(trans($this->citation)),
                    'grade' => $this->grade,
                ])->save();
            }
            $this->alert('success', 'Enregistrement Reussi');
            $this->resetField();
        } catch (\Exception $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    public function delete($id)
    {
        Citation::whereId($id)->delete();
        $this->alert('success', 'Suppression avec Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function render()
    {
        $citations = Citation::all();
        return view('livewire.admin.citations', ['citations' => $citations]);
    }
}