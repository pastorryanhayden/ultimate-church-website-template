<?php

namespace App\Livewire\Sermons;

use Livewire\Component;
use App\Models\Sermon;
use Illuminate\Contracts\View\View;


class Index extends Component 
{
    public $sermons;

    public function mount()
    {
        $this->sermons = Sermon::all();
    }

    public function render(): View
    {
        return view('livewire.sermons.index');
    }
}
