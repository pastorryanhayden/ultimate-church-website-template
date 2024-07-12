<?php

namespace App\Models;

use App\Observers\SermonObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[ObservedBy([SermonObserver::class])]
class Sermon extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'speaker_id',
        'series_id',
        'service_id',
        'manuscript',
        'description',
        'mp3',
        'slides',
        'handout',
        'featured',
        'date',
        'youtube_id',
    ];

    protected $casts = [
        'featured' => 'boolean',
        'date' => 'date',
    ];

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    public function series()
    {
        return $this->belongsTo(Series::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class);
    }

    public function chapter()
    {
        return $this->belongsToMany(Chapter::class)->using(ChapterSermon::class);
    }

    public function bookSermons()
    {
        return $this->hasMany(BookSermon::class);
    }

    public function chapterSermons()
    {
        return $this->hasMany(ChapterSermon::class);
    }

    public function texts()
    {
        $texts = [];
        foreach ($this->chapterSermons as $chapterSermon) {
            $text[] = $chapterSermon->book->name.' '.$chapterSermon->chapter->number.':'.$chapterSermon->verse;
        }

        return $texts;
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
