<?php namespace App\Services;

class GetYoutubeIdService
{
    public static function getId( String $url ) : String
    {
        preg_match(
            '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
            $url,
            $match
          );


        return $match[1];
    }

    public static function getImage( String $url ) : String
    {
        preg_match(
            '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
            $url,
            $match
          );


        return "https://img.youtube.com/vi/" . $match[1] . "/default.jpg";
    }
}