<?php

namespace App\Livewire\Events;

use App\Models\Event;
use Livewire\Component;

class Single extends Component
{
    public $event;

    public function mount($slug)
    {

        $this->event = Event::where('slug', $slug)->first();

    }

    public function render()
    {
        return view('livewire.events.single')
            ->title($this->event->title);
    }
}
