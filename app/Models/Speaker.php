<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'position',
        'bio',
        'thumbnail',
    ];

    public function sermons(): HasMany
    {
        return $this->hasMany(Sermon::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(BlogPost::class);
    }
}
