<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Sermon;
use App\Models\Event;
use App\Models\Ministry;
use App\Models\Devotion;
use App\Models\BlogPost;

class Navigation extends Component
{
    public $transparent = false;
    public $sermons;
    public $events;
    public $ministries;
    public $devotions;
    public $blog;
    public $resources;

    public function mount($transparent = false)
    {
        $this->transparent = $transparent;
        // if there are more than 1 sermons in the database, set sermons as true
        $this->sermons = Sermon::count() > 1 ? true : false;

        // if events exist in the future, set events as true
        $this->events = Event::where('start_date', '>=', now())->count() > 0 ? true : false;

        // if there are ministries in the database, set ministries as true
        $this->ministries = Ministry::count() > 0 ? true : false;

        // If the latest devotion is less than a month old, set devotions as true
        $this->devotions = Devotion::latest()->first()->created_at->diffInDays(now()) < 30 ? true : false;

        $this->blog = BlogPost::count() > 1 ? true : false;

        // If both devotions and sermons exist then set resources to true
        
        $this->resources = ($this->devotions && $this->sermons) || ($this->blog && $this->sermons) || ($this->devotions && $this->blog) || ($this->blog && $this->sermons)? true : false;

        

    }

    public function render()
    {
        return view('livewire.navigation');
    }
}
