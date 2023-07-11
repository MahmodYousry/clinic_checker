<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'cover_image', 'article'];

    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_articles');
    }
}