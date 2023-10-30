<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcement;
use App\Models\Leader;
use App\Models\AboutPage;

class AboutPageController extends Controller
{
    public function show()
    {
        $today = now();
        $about = AboutPage::first();
        $leaders = Leader::where('pastor', true)->get();
        return view('about', compact('leaders', 'about'));
    }
}
