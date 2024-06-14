<?php

namespace App\Models;

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
        'thumbnail' 
       ];

       public function sermons()
       {
           return $this->hasMany(Sermon::class);
       }

       public function posts()
       {
           return $this->hasMany(BlogPost::class);
       }
}
