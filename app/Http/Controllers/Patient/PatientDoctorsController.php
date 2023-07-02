<?php

namespace App\Http\Controllers\Patient;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientDoctorsController extends Controller
{

    public function index()
    {
        $doctors = Doctor::all();
        return view('dashboard.patient.doctors.index', compact('doctors'));
    }

    public function show(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('dashboard.patient.doctors.show', compact('doctor'));
    }

}
