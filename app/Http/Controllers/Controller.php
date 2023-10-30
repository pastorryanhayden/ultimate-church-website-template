<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Models\SiteGlobal;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Announcement;
use App\Models\Event;
use App\Models\Ministry;
use App\Models\Devotion;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function __construct()
    {
        $today = now();
        $announcement = Announcement::where('start', '<=', $today)->where('end', '>=', $today)->first();
        // Get all of the events coming up 
        $events = Event::where('start_date', '>=', $today)->get();
        // are there devotions in the last year?
        $devotions = Devotion::where('published', true)->get();
        $showDevotions = $devotions->count() > 0;

        // Only show events if there are any.
        $showEvents = $events->count() > 0;

        // Show ministries if there are any.
        $showMinistries = Ministry::count() > 0;

        // Get globals
        $site_global = SiteGlobal::first();
        
        View::share('showMinistries', $showMinistries);
        View::share('showEvents', $showEvents);
        View::share('announcement', $announcement);
        View::share('showDevotions', $showDevotions);
        View::share('site_global', $site_global);
    }
   
}
