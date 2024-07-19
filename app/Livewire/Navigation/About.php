<?php

namespace App\Livewire\Navigation;

use Livewire\Component;

class About extends Component
{
    public $transparent = false;

    public $expandabout = false;

    public $testimonies;

    public $articles;

    public $morearticles = false;

    public function mount($transparent, $expandabout, $articles, $testimonies, $morearticles)
    {
        $this->transparent = $transparent;
        $this->expandabout = $expandabout;
        $this->articles = $articles;
        $this->testimonies = $testimonies;
        $this->morearticles = $morearticles;
    }

    public function render()
    {
        return view('livewire.navigation.about');
    }
}
