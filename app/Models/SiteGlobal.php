<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteGlobal extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'action_links' => 'array',
        'useful_links' => 'array',
    ];
}
