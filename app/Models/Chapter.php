<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $fillable = [
        'number',
        'verses',
        'book_id',
    ];

    public function sermons()
    {
        return $this->belongsToMany(Sermon::class);
    }
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
}
