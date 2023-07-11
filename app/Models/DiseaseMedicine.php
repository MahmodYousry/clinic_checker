<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseMedicine extends Model
{
    use HasFactory;
    protected $fillable = ['disease_id', 'medicine_id'];

}