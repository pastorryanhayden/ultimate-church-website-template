<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devotion;

class DevotionController extends Controller
{
    public function index(){
        // Get all the devotions
        $devotions = Devotion::where('published', true)->orderBy('published_at', 'desc')->paginate(5);
        return view('devotion.index', compact('devotions'));
    }
}
