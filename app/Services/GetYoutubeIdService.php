<?php

namespace App\Services;

class GetYoutubeIdService
{
    public static function getId(string $url): string
    {
        preg_match(
            '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
            $url,
            $match
        );

        if (count($match) > 0) {
            return $match[1];
        } else {
            return '';
        }

    }

    public static function getImage(string $url): string
    {
        preg_match(
            '%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i',
            $url,
            $match
        );

        return 'https://img.youtube.com/vi/'.$match[1].'/default.jpg';
    }
}
