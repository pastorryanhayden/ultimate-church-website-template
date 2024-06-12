<?php

namespace App\Livewire\Ministries;

use Livewire\Component;
use App\Models\Ministry;

class Single extends Component
{
    public $ministry;

    public function mount($slug)
    {
        $this->ministry = Ministry::where('slug', $slug)->first();
    }
    public function render()
    {
        return view('livewire.ministries.single')
        ->title('Ministries of Bible Baptist Church in Mattoon, IL');
    }
}
