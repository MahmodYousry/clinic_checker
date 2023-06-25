<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticleReferences extends Model
{
    use HasFactory;

    protected $fillable = ['reference', 'article_id'];

    public function article(): HasOne
    {
        return $this->belongsTo(Article::class);
    }
}
