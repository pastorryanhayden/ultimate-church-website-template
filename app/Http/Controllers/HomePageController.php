<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;

class HomePageController extends Controller
{
    public function show()
    {
        $today = now();
        
        $announcement = Announcement::where('start', '<=', $today)->where('end', '>=', $today)->first();
        return view('welcome', compact('announcement'));
    }
}
