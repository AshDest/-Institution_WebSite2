<?php

namespace App\Http\Livewire\Pages;

use App\Models\Communique;
use App\Models\Event;
use App\Models\Filliere;
use App\Models\SlideImage;
use Livewire\Component;

class Homes extends Component
{
    public function render()
    {
        $slides = SlideImage::all();
        $fillieres = Filliere::all();
        $news = Communique::orderBy('created_at', 'DESC')->get();
        $events = Event::orderBy('created_at', 'DESC')->get();
        return view('livewire.pages.homes', ['slides' => $slides, 'fillieres' => $fillieres, 'news' => $news, 'events' => $events]);
    }
}