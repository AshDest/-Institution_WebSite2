<?php

namespace App\Http\Livewire\Pages;

use App\Models\SlideImage;
use Livewire\Component;

class Homes extends Component
{
    public function render()
    {
        $slides = SlideImage::all();
        return view('livewire.pages.homes', ['slides' => $slides]);
    }
}