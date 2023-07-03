<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DoctorImages extends Model
{
    use HasFactory;
    protected $fillable = ['name'];

    public function doctor(): HasOne
    {
        return $this->belongsTo(Doctor::class);
    }
}