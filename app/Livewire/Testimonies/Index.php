<?php

namespace App\Livewire\Testimonies;

use App\Models\Testimony;
use Livewire\Component;

class Index extends Component
{
    public $testimonies;

    public function mount()
    {
        $this->testimonies = Testimony::where('published', true)->orderBy('order-column', 'asc')->get();
    }

    public function render()
    {
        return view('livewire.testimonies.index');
    }
}
