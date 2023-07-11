<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Disease extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function advices()
    {
        return $this->belongsToMany(Advice::class, 'adisease_advice');
    }
    public function medicines()
    {
        return $this->belongsToMany(Medicine::class, 'disease_medicines');
    }
    public function articles()
    {
        return $this->belongsToMany(Article::class, 'adisease_articles');
    }
}