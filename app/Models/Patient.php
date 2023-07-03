<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'gender', 'photo', 'date_of_birth', 'phone_one', 'phone_two', 'email', 'address'];

    public function checkup_details(): BelongsTo
    {
        return $this->hasMany(CheckupDetails::class);
    }
}