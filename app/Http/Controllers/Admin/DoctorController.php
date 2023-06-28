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
            $file->storeAs('public/doctors_photos', $photoName);

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

        return redirect()->route('doctors.index')->with('success', 'Doctor Data Has Been Saved Successfuly !');
    }

    public function show(string $id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('dashboard.admin.show', compact('doctor'));
    }

    public function edit($id)
    {
        $doctor = Doctor::findOrFail($id);
        return view('dashboard.admin.edit', compact('doctor'));
    }

    public function update(Request $request, string $id)
    {

        // Validate First
        $valiation = $request->validate([
            'first_name'        => 'required',
            'last_name'         => 'required',
            'email'             => 'required|email',
            'gender'            => 'required',
            'photo'             => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'phone'             => 'required',
            'speciality'        => 'required',
            'address'           => 'required',
            'facebook_profile'  => 'required',
        ]);

        // get the doctor data using the id
        $editDoctor = Doctor::findOrFail($id);

        if ( $request->hasfile('photo') ) { // if file selected then

            // Asign Photo Name
            $photoName = $request->photo->getClientOriginalName();
            $file = $request->file('photo');

            // upload and update the new one

            // get the old photo path
            $path = '../storage/app/doctors_photos/'.$editDoctor->photo;

            if (file_exists($path)) { // file exist

                // delete the file
                unlink($path);

                // Make Folder with doctors_photos if not exist then move the photo there
                $file->storeAs('public/doctors_photos', $photoName);

                // Update Every Field
                $editDoctor->first_name           = $request->first_name;
                $editDoctor->last_name            = $request->last_name;
                $editDoctor->email                = $request->email;
                $editDoctor->gender               = $request->gender;
                $editDoctor->photo                = $photoName;
                $editDoctor->phone                = $request->phone;
                $editDoctor->speciality           = $request->speciality;
                $editDoctor->address              = $request->address;
                $editDoctor->facebook_page_link   = $request->facebook_profile;
                $editDoctor->save();

            } else { // file does not exist so continue

                // Make Folder with doctors_photos if not exist then move the photo there
                $file->storeAs('public/doctors_photos', $photoName);

                // Update Every Field
                $editDoctor->first_name           = $request->first_name;
                $editDoctor->last_name            = $request->last_name;
                $editDoctor->email                = $request->email;
                $editDoctor->gender               = $request->gender;
                $editDoctor->photo                = $photoName;
                $editDoctor->phone                = $request->phone;
                $editDoctor->speciality           = $request->speciality;
                $editDoctor->address              = $request->address;
                $editDoctor->facebook_page_link   = $request->facebook_profile;
                $editDoctor->save();

            }

            // return redirect
            return redirect()->route('doctors.index')->with('success', 'Doctor Data Updated successfuly');

        } else {

            // Update Every Field Except Photo
            $editDoctor->first_name           = $request->first_name;
            $editDoctor->last_name            = $request->last_name;
            $editDoctor->email                = $request->email;
            $editDoctor->gender               = $request->gender;
            $editDoctor->phone                = $request->phone;
            $editDoctor->speciality           = $request->speciality;
            $editDoctor->address              = $request->address;
            $editDoctor->facebook_page_link   = $request->facebook_profile;
            $editDoctor->save();

            return redirect()->route('doctors.index')->with('success', 'Doctor Data Updated successfuly');

        }
    }

    public function destroy($id)
    {
        // get the row from db using the id of the doctor
        $row = Doctor::findOrFail($id);

        // if there is image in db
        if ($row->photo) {
            // get the full path
            $path = '../storage/app/doctors_photos/'.$row->photo;
            // delete file using path if file exist and delete the row
            if (file_exists($path)) {
                // delete the file
                unlink($path);
                // delete the row in db
                $row->delete();
                // return success message
                return redirect()->route('doctors.index')->with('success', 'Doctor Data had deleted');
            } else {
                // delete the row in db
                $row->delete();
                // return success message
                return redirect()->route('doctors.index')->with('success', 'Doctor Data had deleted but his photo file not found on the server');
            }
        } else {
            // delete the row in db
            $row->delete();
            // return success message
            return redirect()->route('doctors.index')->with('success', 'Doctor Data had deleted but no photo found in database to delete');
        }
    }
}
