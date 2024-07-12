<?php

namespace App\Livewire\Sermons;

use App\Models\Sermon;
use Livewire\Component;

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
            ->layout('layouts.printsermon')
            ->title('Print Sermon');
    }
}
