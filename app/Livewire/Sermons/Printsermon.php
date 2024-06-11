<?php

namespace App\Livewire\Sermons;

use Livewire\Component;
use App\Models\Sermon;


class Printsermon extends Component
{

    public $sermon;
    

    public function mount($id)
    {
        $this->sermon = Sermon::where('id', $id)->first();
    }

    public function render()
    {
        return view('livewire.sermons.printsermon')
        ->layout('layouts.printsermon');
    }
}
