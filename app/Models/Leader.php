<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'photo',
        'position',
        'facebook',
        'twitter',
        'instagram',
        'bio',
        'pastor',
        'lead_pastor',
        'deacon'
    ];

    protected $casts = [
        'pastor' => 'boolean',
        'lead_pastor' => 'boolean',
        'deacon' => 'boolean'
    ];

    public function ministries()
    {
        return $this->hasMany(Ministry::class);
    }
}
