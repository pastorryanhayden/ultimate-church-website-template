<?php

namespace App\Livewire\Home;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public $event;

    public function mount()
    {
        $today = now();
        // Get yesterday's date
        $yesterday = $today->subDays(1);
        $this->event = Event::where('start_date', '>=', $yesterday)->where('on_homepage', true)->orderBy('start_date', 'asc')->first();
    }

    public function render()
    {
        return view('livewire.home.events');
    }
}
