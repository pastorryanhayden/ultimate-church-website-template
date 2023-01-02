<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Leader;

class AboutPageController extends Controller
{
    public function show()
    {
        $today = now();
        $leaders = Leader::where('pastor', true)->get();
        return view('about', compact('leaders'));
    }
}
