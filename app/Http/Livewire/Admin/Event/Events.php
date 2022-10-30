<?php

namespace App\Http\Livewire\Admin\Event;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public function render()
    {
        $events = Event::all();
        return view('livewire.admin.event.events', ['events' => $events]);
    }
}