<?php

namespace App\Http\Controllers;

use App\Models\Sermon;

class SermonController extends Controller
{
    public function index()
    {
        $sermons = Sermon::all();

        return view('sermon.index', compact('sermons'));
    }

    public function show($slug)
    {
        $sermon = Sermon::where('slug', $slug)->first();

        return view('sermon.show', ['sermon' => $sermon]);
    }
}
