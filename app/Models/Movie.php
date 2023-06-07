<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'title',
        'director',
        'image_url',
        'duration',
        'release_date',
        'genre'
    ];

    public static function search($title)
    {
        return Movie::where('title', 'like', '%' . $title . '%')->paginate(10);
    }
}

