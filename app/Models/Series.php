<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'photo',
        'featured',
        'body',
    ];

    protected $casts = [
        'featured' => 'boolean',
    ];

    public function sermons()
    {
        return $this->hasMany(Sermon::class);
    }
}
