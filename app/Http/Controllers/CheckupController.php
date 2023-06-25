<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckupController extends Controller
{


    public function index()
    {
        return view('dashboard.patient.checkup');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function examine(Request $request)
    {
        $validatetion = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file = $request->image;

        $imageName = time().'.'.$request->image->extension();

        // $request->image->move(public_path('images'), $imageName);

        if ($validatetion) {
            return $this->analysis($file->getClientOriginalName()); // it takes 30 seconds to return response
        } else {
            return 'valiation Error';
        }


    }

    public function analysis($imagePath) {
        $result = $imagePath;
        return $this->patientReport($result);
    }

    public function patientReport($disease_name) {
        $patient_name = 'hoda';
        return view('dashboard.patient.checkup-result', compact('patient_name', 'disease_name'));
    }
}
