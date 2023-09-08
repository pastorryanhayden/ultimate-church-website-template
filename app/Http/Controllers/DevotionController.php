<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Devotion;

class DevotionController extends Controller
{
    public function index(){
        // Get all the devotions that are published and the day is less than or equal to today
        $devotions = Devotion::where('published', true)->where('published_at', '<=', now())->orderBy('published_at', 'desc')->paginate(5);
        // If the devotion has a youtube_url then get the youtube_id which is between the = and the & in the url
        foreach($devotions as $devotion){
            if($devotion->video_url){
                $devotion->youtube_id = substr($devotion->video_url, strpos($devotion->video_url, "=") + 1);
                if(strpos($devotion->youtube_id, "&")){
                    $devotion->youtube_id = substr($devotion->youtube_id, 0, strpos($devotion->youtube_id, "&"));
                }
            }
        }
        return view('devotion.index', compact('devotions'));
    }
    public function show($id){
        // Get the devotion with the id
        $devotion = Devotion::findOrFail($id);
        // If the devotion has a youtube_url then get the youtube_id which is between the = and the & in the url
        if($devotion->video_url){
            $devotion->youtube_id = substr($devotion->video_url, strpos($devotion->video_url, "=") + 1);
            if(strpos($devotion->youtube_id, "&")){
                $devotion->youtube_id = substr($devotion->youtube_id, 0, strpos($devotion->youtube_id, "&"));
            }
        }
        return view('devotion.single', compact('devotion'));
    }
}
