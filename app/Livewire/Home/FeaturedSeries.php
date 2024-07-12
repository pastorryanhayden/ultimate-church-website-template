<?php

namespace App\Livewire\Home;

use App\Models\Series;
use Livewire\Component;

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
