<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

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
        return view('events.show', compact('event'));
    }

}
