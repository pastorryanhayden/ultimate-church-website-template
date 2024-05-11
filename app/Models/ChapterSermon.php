<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;

class ChapterSermon extends Pivot
{

    protected $fillable = [
        'verse',
        'book_id',
        'chapter_id',
        'sermon_id',
    ];

    public function chapter(): BelongsTo
    {
        return $this->belongsTo(Chapter::class);
    }

    public function sermon(): BelongsTo
    {
        return $this->belongsTo(Sermon::class);
    }
    public function book(): BelongsTo
    {
        return $this->belongsTo(Book::class);
    }
}
