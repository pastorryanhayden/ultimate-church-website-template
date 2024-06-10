<?php

namespace App\Livewire\Sermons;

use Livewire\Component;
use App\Models\Sermon;

class Single extends Component
{
    public $sermon;

    public function mount($slug)
    {
        $this->sermon = Sermon::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.sermons.single');
    }
}
