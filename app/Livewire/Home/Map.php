<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\SiteGlobal;

class Map extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = SiteGlobal::first();
    }

    public function render()
    {
        return view('livewire.home.map');
    }
}
