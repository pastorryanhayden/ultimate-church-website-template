<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ministry;

class MinistryController extends Controller
{
    public function index(){
        // Get all the ministries.
        $ministries = Ministry::all();
        // Return the view with the ministries.
        return view('ministries.index', compact('ministries'));
    }
    public function show($slug){
        // Get the ministry by the slug.
        $ministry = Ministry::where('slug', $slug)->first();
        // Return the view with the ministry.
        return view('ministries.show', compact('ministry'));

    }
}
