<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'speaker_id',
        'series_id',
        'service',
        'manuscript',
        'description',
        'mp3',
        'slides',
        'handout',
        'featured',
        'date',
        'video_url',
        'views'
    ];

    protected $casts = [
        'featured' => 'boolean',
        'date' => 'date'
    ];

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    public function series()
    {
        return $this->belongsTo(Series::class);
    }
    public function book()
    {
        return $this->belongsToMany(Book::class);
    }
    public function chapter()
    {
        return $this->belongsToMany(Chapter::class)->withPivot('verseStart', 'verseEnd');
    }
    public function complete()
    {
        if ($this->mp3 || $this->video_url) {
            return true;
        } else {
            return false;
        }
    }
    // Easily get the date in this format 'Sat, 02 Jan 2016 16:00:00 PDT'
    public function podcastDate()
    {
        $date = new Carbon($this->date);
        return $date->toRfc7231String();
    }
}
