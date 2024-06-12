<?php

namespace App\Livewire\About;

use Livewire\Component;

class Section extends Component
{
    public $section;
    public $place;

    public function mount($section, $place)
    {
        $this->section = $section;
        $this->place = $place;
    }

    public function render()
    {
        return view('livewire.about.section');
    }
}
