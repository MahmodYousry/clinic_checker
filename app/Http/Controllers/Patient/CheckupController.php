<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repos\Checkup;
class CheckupController extends Controller
{
    protected Checkup $handle;
    public function __construct(Checkup $handle){
        $this->handle = $handle;
    }
    public function checkup(Request $request)
    {
        $imagePath = $this->handle->saveImage($request);

        $disease = $this->handle->analysis($imagePath, $request);

        // $patientReport = $this->handle->buildPatientReport($imagePath, $disease);

        // return view('dashboard.patient.checkup-result', compact('patientReport'));
        return $disease;
    }
}
