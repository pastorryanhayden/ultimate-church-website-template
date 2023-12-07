<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class EventController extends Controller
{

    public function index()
    {

    
        // Get all upcoming events
        $events = Event::where('start_date', '>=', now())->orderBy('start_date')->get();
        // If no events exist, then redirect to the homepage
        if($events->count() == 0){
            return redirect()->to('/');
        }
        return view('events.index', compact('events'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        // Get the event by the slug
        $event = Event::where('slug', $slug)->first();
        $event->title = Str::title($event->title);
        $event->for = Str::title($event->for);
        //Format the date for display
        $event->start_date;
        $event->end_date = Carbon::parse($event->end_date)->format('l, F jS, Y');
        return view('events.show', compact('event'));
    }

}
