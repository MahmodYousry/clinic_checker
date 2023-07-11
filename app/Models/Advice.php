<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advice extends Model
{
    use HasFactory;
    protected $table = 'advices';
    protected $fillable = ['title'];

    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_advice');
    }
}
