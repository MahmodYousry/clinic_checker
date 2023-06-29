<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'gender', 'photo', 'date_of_birth', 'phone_one', 'phone_two', 'email', 'address'];
}
