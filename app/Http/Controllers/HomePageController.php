<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ministry;
use App\Models\Event;
use App\Models\Devotion;
use App\Models\SiteGlobal;

class HomePageController extends Controller
{
    public function show()
    {
        $today = now();
        // Get yesterday's date
        $yesterday = $today->subDays(1);
        $ministries = Ministry::where('homepage', true)->limit(4)->get();
        // Get the next upcoming event that is on the homepage
        $event = Event::where('start_date', '>=', $yesterday)->where('on_homepage', true)->orderBy('start_date', 'asc')->first();
        // Get all the devotions published in the last 30 days
        $recent_devotions = Devotion::where('published', true)->where('published_at', '>=', $today->subDays(30))->orderBy('created_at', 'desc')->limit(6)->get();   
        $site_global = SiteGlobal::first();
        return view('welcome', compact('ministries', 'event', 'recent_devotions', 'site_global'));
    }
}
