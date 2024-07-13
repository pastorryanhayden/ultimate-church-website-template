<?php

namespace App\Models;

use App\Observers\SermonObserver;
use Illuminate\Database\Eloquent\Attributes\ObservedBy;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    protected function casts(): array
    {
        return [
            'featured' => 'boolean',
            'date' => 'date',
        ];
    }

    public function speaker(): BelongsTo
    {
        return $this->belongsTo(Speaker::class);
    }

    public function series(): BelongsTo
    {
        return $this->belongsTo(Series::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function books(): BelongsToMany
    {
        return $this->belongsToMany(Book::class);
    }

    public function chapter(): BelongsToMany
    {
        return $this->belongsToMany(Chapter::class)->using(ChapterSermon::class);
    }

    public function bookSermons(): HasMany
    {
        return $this->hasMany(BookSermon::class);
    }

    public function chapterSermons(): HasMany
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
