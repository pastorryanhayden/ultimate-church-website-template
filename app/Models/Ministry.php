<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ministry extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'for',
        'leader_id',
        'body',
        'meeting_info',
        'homepage',
        'image',
    ];

    protected function casts(): array
    {
        return [
            'homepage' => 'boolean',
        ];
    }

    public function leader(): BelongsTo
    {
        return $this->belongsTo(Leader::class);
    }
}
