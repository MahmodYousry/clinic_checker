<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = ['cover_image', 'title', 'article', 'images_id', 'references_id'];

    public function article_images(): BelongsTo
    {
        return $this->hasMany(ArticleImages::class);
    }
    public function article_references(): BelongsTo
    {
        return $this->hasMany(ArticleReferences::class);
    }
}