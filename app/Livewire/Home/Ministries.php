<?php

namespace App\Livewire\Home;

use App\Models\Ministry;
use Livewire\Component;

class Ministries extends Component
{
    public $ministries;

    public $show = false;

    public function mount()
    {
        $this->ministries = Ministry::where('homepage', 1)->take(4)->get();
        $this->show = $this->ministries->count() > 1 ? true : false;
    }

    public function render()
    {
        return view('livewire.home.ministries');
    }
}
