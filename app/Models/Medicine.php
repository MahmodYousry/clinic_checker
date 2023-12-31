<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = ['name','image', 'expected_price'];
    
    public function diseases()
    {
        return $this->belongsToMany(Disease::class, 'disease_medicines');
    }
}