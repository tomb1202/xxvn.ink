<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'sort',
        'hidden',
        'meta_title',
        'meta_description',
        'is_main',
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_genres');
    }
}
