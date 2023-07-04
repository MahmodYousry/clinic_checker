<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'cover_image', 'article', 'disease_id'];

    public function disease(): HasOne
    {
        return $this->belongsTo(Disease::class);
    }
}