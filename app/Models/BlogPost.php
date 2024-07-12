<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected function casts(): array
    {
        return [
            'published' => 'boolean',
            'permenantly_featured' => 'boolean',
        ];
    }

    public function author()
    {
        return $this->belongsTo(Speaker::class, 'speaker_id');
    }
}
