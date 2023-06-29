<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckupController extends Controller
{
    public function saveImage($request)
    {
        // validation Image

        // Save Image In Storage

        // Get Image Path
    }
    public function getMLAPI()
    {
        // select api link where id = 1
    }
    public function fetchImage($pathImage)
    {
        // return Image It Self
    }
    public function analysis(String $pathImage){
        // $this->getMLAPI() => Return Machine Learning API Url
        // $this->fetchImage() => Return Image It Self
        // (take Machine Learning API Url) , Send -(for it) the Image - (It Self) as external api) and (remains 10 - 20 - 30 seconds and returns => (disease Name))
    }
    public function diseaseTreatment(String $disease)
    {
        // Returns The Article Of This Disease
    }
    public function fetchPatientData(){
        // Auth::user()
        // return patien data such as name and age
    }
    public function buildPatientReport(String $pathImage, String $disease)
    {
        // $this->fetchImage($pathImage) => Fetch Image
        // $this->diseaseTreatment($disease) => Return all related to this disease
        // $this->fetchPatientData() => Fetch Patient Data (Name , Age)
        // return array($pathImage, $disease, $fetchPatientData, $diseaseTreatment);
    }
    public function checkup(Request $request)
    {
        // $this->saveImage($request) => Return Image Path

        // $this->analysis(Image Path) => Return Disease Name

        // $this->buildPatientReport(Image Path, Disease Name) => Return Patient Report

        // return view('dashboard.patient.checkup-result', compact('patientReport'));
    }
}