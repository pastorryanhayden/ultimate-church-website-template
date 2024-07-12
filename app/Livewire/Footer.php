<?php

namespace App\Livewire;

use App\Models\SiteGlobal;
use Livewire\Component;

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
