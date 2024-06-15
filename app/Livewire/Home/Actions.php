<?php

namespace App\Livewire\Home;
use App\Models\SiteGlobal;
use Livewire\Component;

class Actions extends Component
{
    public $settings;
    public $show;

    public function mount()
    {
        $this->settings = SiteGlobal::first();
        if(isset($this->settings->action_links) && count($this->settings->action_links) > 0)
        {
            $this->show = true; 
        }else
        {
            $this->show = false;
        }
    }
    
    public function render()
    {
        return view('livewire.home.actions');
    }
}
