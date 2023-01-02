<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ministry;
use App\Models\Event;

class HomePageController extends Controller
{
    public function show()
    {
        $today = now();
        $ministries = Ministry::where('homepage', true)->limit(4)->get();
        // Get the next upcoming event that is on the homepage
        $event = Event::where('start_date', '>=', $today)->where('on_homepage', true)->orderBy('start_date', 'asc')->first();
     
        return view('welcome', compact('ministries', 'event'));
    }
}
