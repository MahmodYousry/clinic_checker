<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckupController extends Controller
{


    public function index()
    {
        return view('dashboard.patient.checkup');
    }

    public function patientReport($disease_name) {
        $patient_name = 'hoda';
        return view('dashboard.patient.checkup-result', compact('patient_name', 'disease_name'));
    }
    public function website()
    {
        return view('website.pages.website');
    }
}