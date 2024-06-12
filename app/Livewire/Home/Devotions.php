<?php

namespace App\Livewire\Home;

use Livewire\Component;
use App\Models\Devotion;
use Illuminate\Support\Str;

class Devotions extends Component
{
    public $devotions;
    public $show;


    public function mount()
    {

        // If the latest devotion is less than a month old, set devotions as true
        $this->show = Devotion::latest()->first()->published_at->diffInDays(now()) < 30 ? true : false;

        $this->devotions = Devotion::where('published', true)->orderBy('created_at', 'desc')->take(3)->get();


        foreach($this->devotions as $devotion)
        {
            $devotion->excerpt = Str::limit($devotion->body, 140);
        }
    }

    public function render()
    {
        return view('livewire.home.devotions');


    }
}
