<?php

namespace App\View\Components;

use App\Models\Series;
use App\Models\Sermon;
use App\Models\Speaker;
use Illuminate\View\Component;

class Sermontabs extends Component
{
    public $selected = 'Sermons';

    public $sermonscount = 0;

    public $seriescount = 0;

    public $speakercount = 0;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($selected)
    {
        $this->selected = $selected;
        $this->sermonscount = Sermon::count();
        $this->seriescount = Series::count();
        $this->speakercount = Speaker::count();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        if ($this->sermonscount && $this->seriescount && $this->speakercount) {
            return view('components.sermontabs');
        }

    }
}
