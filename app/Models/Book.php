<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'abbr',
    ];

    public function sermons(): BelongsToMany
    {
        return $this->belongsToMany(Sermon::class);
    }

    public function chapter(): HasMany
    {
        return $this->hasMany(Chapter::class);
    }
}
