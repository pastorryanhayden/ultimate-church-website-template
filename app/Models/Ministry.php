<?php

namespace App\Models;

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
        'image'
    ];

    protected $casts = [
        'homepage' => 'boolean'
    ];

    public function leader()
    {
        return $this->belongsTo(Leader::class);
    }
}
