<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Advice;
use App\Models\Article;
use App\Models\Disease;
use App\Models\Medicine;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{

    public function treatment()
    {
        $allMedicines = Medicine::all();
        $allAdvices = Advice::all();
        $allArticles = Article::all();
        $allDiseases = Disease::all();
        return view('dashboard.admin.treatment.form', compact('allDiseases', 'allArticles', 'allAdvices', 'allMedicines'));
    }

    public function setTreatment(Request $request)
    {
        // try {
        //     foreach ($validatedData as $data) {
        //         $classroom = new Classroom();
        //         $classroom->class_name = ['en' => $data['class_name_en'], 'ar' => $data['class_name']];
        //         $classroom->grade_id = $data['grade_id'];
        //         $classroom->save();
        //     }

        //     return response()->json(['message' => 'Data saved successfully']);
        // } catch (\Exception $e) {
        //     return response()->json(['error' => $e->getMessage()], 500);
        // }
    }
}
