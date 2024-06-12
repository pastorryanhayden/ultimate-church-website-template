<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Series;

class FeaturedSeries extends Component
{
    public $series;

    public function mount()
    {
        $this->series = Series::where('featured', true)->withCount('sermons')->orderBy('sermons_count', 'desc')->take(3)->get();
    }

    public function render()
    {
        
                 return view('livewire.home.featured-series');   

    }
}
