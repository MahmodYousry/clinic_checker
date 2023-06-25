<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        return view('dashboard.patient.index');
    }

    public function create()
    {
        return view('dashboard.patient.create');
    }

    public function edit()
    {
        return view('dashboard.patient.edit');
    }
}
