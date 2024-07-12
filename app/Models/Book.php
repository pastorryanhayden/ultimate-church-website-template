<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'abbr',
    ];

    public function sermons()
    {
        return $this->belongsToMany(Sermon::class);
    }

    public function chapter()
    {
        return $this->hasMany(Chapter::class);
    }
}
