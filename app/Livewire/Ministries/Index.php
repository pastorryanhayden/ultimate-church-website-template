<?php

namespace App\Livewire\Ministries;

use App\Models\Ministry;
use Livewire\Component;

class Index extends Component
{
    public $ministries;

    public function mount()
    {

        $this->ministries = Ministry::all();
    }

    public function render()
    {
        return view('livewire.ministries.index')
            ->title('Ministries of ' . env('CHURCH_NAME'));
    }
}
