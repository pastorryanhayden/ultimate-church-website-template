<?php

namespace App\Livewire\Home;
use App\Models\SiteGlobal;
use Livewire\Component;

class Actions extends Component
{
    public $settings;

    public function mount()
    {
        $this->settings = SiteGlobal::first();
    }
    
    public function render()
    {
        return view('livewire.home.actions');
    }
}
