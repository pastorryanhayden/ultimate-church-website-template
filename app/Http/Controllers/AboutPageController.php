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
        
        $announcement = Announcement::where('start', '<=', $today)->where('end', '>=', $today)->first();
        return view('about', compact('announcement', 'leaders'));
    }
}
