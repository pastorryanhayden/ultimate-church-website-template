<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Announcement;
use App\Models\Event;
use App\Models\Ministry;
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
     
        // Only show events if there are any.
        $showEvents = $events->count() > 0;

        // Show ministries if there are any.
        $showMinistries = Ministry::count() > 0;
        
        View::share('showMinistries', $showMinistries);
        View::share('showEvents', $showEvents);
        View::share('announcement', $announcement);
    }
   
}
