<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'photo',
        'body',
        'start_date',
        'end_date',
        'on_homepage',
        'for',
    ];

    protected $casts = [
        'on_homepage' => 'boolean',
        'start_date' => 'date',
        'end_date' => 'date',
    ];
}
