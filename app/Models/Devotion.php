<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devotion extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'text',
        'video_url',
        'audio_url',
        'image_url',
        'body',
        'leader_id',
        'user_id',
        'published',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published' => 'boolean',
            'published_at' => 'date',
        ];
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Leader::class, 'leader_id');
    }
}
