<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable=['title','director','imageUrl','duration','releaseDate','genre'];
    public static function search($query, $searchTerm)
    {
        return $query->where('title', 'like', '%' .$searchTerm. '%');
    }
}
