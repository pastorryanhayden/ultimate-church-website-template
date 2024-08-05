<?php

namespace App\Livewire\Ministries;

use App\Models\Ministry;
use Livewire\Component;

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
            ->title('Ministries of ' . env('CHURCH_NAME'));
    }
}
