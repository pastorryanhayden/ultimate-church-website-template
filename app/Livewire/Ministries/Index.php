<?php

namespace App\Livewire\Ministries;

use Livewire\Component;
use App\Models\Ministry;

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
        ->title('Ministries of Bible Baptist Church in Mattoon, IL');
    }
}
