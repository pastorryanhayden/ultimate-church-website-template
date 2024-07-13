<?php

namespace App\Http\Controllers;

use App\Models\AboutPage;
use App\Models\Leader;

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
