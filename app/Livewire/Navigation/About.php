<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class About extends Component
{
    public $transparent = false;

    public $expandabout = false;

    public $testimonies;

    public $articles;

    public function mount($transparent, $expandabout, $articles, $testimonies)
    {
        $this->transparent = $transparent;
        $this->expandnabout = $expandabout;
        $this->articles = $articles;
        $this->testimonies = $testimonies;
    }

    public function render()
    {
        return view('livewire.navigation.about');
    }
}
