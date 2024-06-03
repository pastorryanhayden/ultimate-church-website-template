<?php

namespace App\Livewire\Events;

use Livewire\Component;
use App\Models\Event;

class Single extends Component
{
    public $event;

    public function mount($slug)
    {

    $this->event = Event::where('slug', $slug)->first();
    
    }

    public function render()
    {
        return view('livewire.events.single');
    }
}
