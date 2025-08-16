<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'meta_title',
        'meta_description',
        'hidden'
    ];

    public function movies()
    {
        return $this->belongsToMany(Movie::class, 'movie_countries');
    }
}
