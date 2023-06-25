<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleImages extends Model
{
    use HasFactory;

    protected $fillable = ['image', 'article_id'];

    public function article(): HasOne
    {
        return $this->belongsTo(Article::class);
    }
}
