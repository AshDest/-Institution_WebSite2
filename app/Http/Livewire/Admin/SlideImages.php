<?php

namespace App\Http\Livewire\Admin;

use App\Models\SlideImage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManager;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class SlideImages extends Component
{
    use WithFileUploads;
    use LivewireAlert;
    public $images;
    protected $rules = [
        'images' => 'image|min:2|required|mimes:jpeg,png,jpg,gif',
    ];
    protected $messages = [
        'images.required' => 'Vous devez selectionner une image.',
        'images.image' => 'Vous devez selectionner une image valide.',
        'images.min' => 'La taille du fichier est trop petite.',
        'images.mimes' => 'Image incorrect !',
    ];
    public function resetField()
    {
        $this->images = '';
    }
    public function save()
    {
        $this->validate();
        try {
            $imageHash = $this->images->hashName();
            $manager =  new ImageManager();
            $manager->make($this->images->getRealPath())->resize(1920, 820)->save('assets/images/slides/' . $imageHash);
            SlideImage::create([
                'images' => $imageHash,
            ])->save();
            $this->alert('success', 'Enregistrement Reussi');
            $this->resetField();
        } catch (\Exception $e) {
            $this->alert('warning', 'Erreur Enregistrement' . $e, ['position' => 'center']);
        }
    }
    public function delete($id)
    {
        SlideImage::whereId($id)->delete();
        $this->alert('success', 'Suppression avec Success', [
            'position' => 'center',
            'timer' => 3000,
            'toast' => true,
        ]);
    }
    public function render()
    {
        $photos = SlideImage::all();
        return view('livewire.admin.slide-images', ['photos' => $photos]);
    }
}