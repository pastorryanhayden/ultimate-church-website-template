<?php

namespace App\Livewire\About;

use Livewire\Component;

class Header extends Component
{
    public $sections;
    public $details;

    public function mount($sections, $details)
    {
        $this->sections = $sections;
        $this->details = $details;
    }
    
    public function render()
    {
        return view('livewire.about.header');
    }
}
