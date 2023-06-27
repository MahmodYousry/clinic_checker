<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{

    public function index()
    {
        $doctors = Doctor::all();
        return view('dashboard.admin.index', compact('doctors'));
    }

    public function create()
    {
        return view('dashboard.admin.create');
    }

    public function store(Request $request)
    {

        // Validate First
        $valiation = $request->validate([
            'first_name'        => 'required',
            'last_name'         => 'required',
            'email'             => 'required|email',
            'gender'            => 'required',
            'photo'             => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'phone'             => 'required',
            'speciality'        => 'required',
            'address'           => 'required',
            'facebook_profile'  => 'required',
        ]);

        // if Image File
        if ($request->hasfile('photo')) {
            // Asign Photo Name
            $photoName = $request->photo->getClientOriginalName();
            $file = $request->file('photo');

            // Make Folder with doctors_photos if not exist then move the photo there
            $file->storeAs('doctors_photos/', $photoName);

            // Store Every Field
            $newStore = new Doctor();
            $newStore->first_name           = $request->first_name;
            $newStore->last_name            = $request->last_name;
            $newStore->email                = $request->email;
            $newStore->gender               = $request->gender;
            $newStore->photo                = $photoName;
            $newStore->phone                = $request->phone;
            $newStore->speciality           = $request->speciality;
            $newStore->address              = $request->address;
            $newStore->facebook_page_link   = $request->facebook_profile;
            $newStore->save();

        }

        return redirect()->route('doctors.index')->with('success', 'Data Has Been Saved Successfuly !');
    }

    public function show(string $id)
    {
        //
    }

    public function edit($id)
    {
        return view('dashboard.admin.edit');
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
