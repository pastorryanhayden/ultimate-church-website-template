<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SiteGlobal;

class Footer extends Component
{

    public $settings;

    public function mount()
    {
        // Get the settings
        $this->settings = SiteGlobal::first();
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
