<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'gender', 'photo', 'speciality', 'phone', 'email', 'address', 'facebook_page_link'];
}
