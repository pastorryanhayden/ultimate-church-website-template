<?php

namespace App\Livewire;

use Livewire\Component;

class SimpleHeader extends Component
{
    public $heading;

    public $subheading;

    public function mount($heading, $subheading)
    {
        $this->heading = $heading;
        $this->subheading = $subheading;
    }

    public function render()
    {
        return view('livewire.simple-header');
    }
}
