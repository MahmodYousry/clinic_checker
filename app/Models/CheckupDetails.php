<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class CheckupDetails extends Model
{
    use HasFactory;
    protected $fillable = ['date_of_examination', 'disease', 'image_name', 'patient_id'];

    public function patient(): HasOne
    {
        return $this->belongsTo(Patient::class);
    }
}
