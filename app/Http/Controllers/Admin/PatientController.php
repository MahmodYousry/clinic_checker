<?php

namespace App\Http\Controllers\Admin;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Patient;

class PatientController extends Controller
{

    public function index()
    {
        $patients = Patient::all();
        return view('dashboard.admin.patients.index', compact('patients'));
    }

    public function create()
    {
        return view('dashboard.admin.patients.create');
    }

    public function store(Request $request)
    {

        // Validate First
        $valiation = $request->validate([
            'first_name'        => 'required',
            'last_name'         => 'required',
            'gender'            => 'required',
            'photo'             => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'date_of_birth'     => 'required',
            'phone_one'         => 'required',
            'phone_two'         => 'required',
            'email'             => 'required|email',
            'address'           => 'required',
        ]);

        // if Image File
        if ($request->hasfile('photo')) {
            // Asign Photo Name
            $photoName = $request->photo->getClientOriginalName();
            $file = $request->file('photo');

            // Make Folder with doctors_photos if not exist then move the photo there
            $file->storeAs('public/patients_photos', $photoName);

            // Store Every Field
            $newStore = new Patient();
            $newStore->first_name           = $request->first_name;
            $newStore->last_name            = $request->last_name;
            $newStore->email                = $request->email;
            $newStore->gender               = $request->gender;
            $newStore->photo                = $photoName;
            $newStore->phone_one            = $request->phone_one;
            $newStore->phone_two            = $request->phone_two;
            $newStore->date_of_birth        = $request->date_of_birth;
            $newStore->address              = $request->address;
            $newStore->save();

        }

        return redirect()->route('patient.index')->with('success', 'Patient Data Has Been Saved Successfuly !');

    }

    public function show(string $id)
    {
        $patient = Patient::findOrFail($id);
        return view('dashboard.admin.patients.show', compact('patient'));
    }

    public function edit(string $id)
    {
        $patient = Patient::findOrFail($id);
        return view('dashboard.admin.patients.edit', compact('patient'));
    }

    public function update(Request $request, string $id)
    {
        // Validate First
        $valiation = $request->validate([
            'first_name'        => 'required',
            'last_name'         => 'required',
            'gender'            => 'required',
            'photo'             => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'date_of_birth'     => 'required',
            'phone_one'         => 'required',
            'phone_two'         => 'required',
            'email'             => 'required|email',
            'address'           => 'required',
        ]);

        // get the doctor data using the id
        $editPatient = Patient::findOrFail($id);

        if ( $request->hasfile('photo') ) { // if file selected then

            // Asign Photo Name
            $photoName = $request->photo->getClientOriginalName();
            $file = $request->file('photo');

            // upload and update the new one

            // get the old photo path
            $path = '../storage/app/public/patients_photos/'.$editPatient->photo;

            if (file_exists($path)) { // file exist

                // delete the file
                unlink($path);

                // Make Folder with doctors_photos if not exist then move the photo there
                $file->storeAs('public/patients_photos', $photoName);

                // Update Every Field
                $editPatient->first_name           = $request->first_name;
                $editPatient->last_name            = $request->last_name;
                $editPatient->email                = $request->email;
                $editPatient->gender               = $request->gender;
                $editPatient->photo                = $photoName;
                $editPatient->phone_one            = $request->phone_one;
                $editPatient->phone_two            = $request->phone_two;
                $editPatient->date_of_birth        = $request->date_of_birth;
                $editPatient->address              = $request->address;
                $editPatient->save();

                // return redirect
                return redirect()->route('patient.index')->with('success', 'Patient Data Updated successfuly And Photo Deleted From The Server');

            } else { // file does not exist so continue

                // Make Folder with doctors_photos if not exist then move the photo there
                $file->storeAs('public/patients_photos', $photoName);

                // Update Every Field
                $editPatient->first_name           = $request->first_name;
                $editPatient->last_name            = $request->last_name;
                $editPatient->email                = $request->email;
                $editPatient->gender               = $request->gender;
                $editPatient->photo                = $photoName;
                $editPatient->phone_one            = $request->phone_one;
                $editPatient->phone_two            = $request->phone_two;
                $editPatient->date_of_birth        = $request->date_of_birth;
                $editPatient->address              = $request->address;
                $editPatient->save();

                // return redirect
                return redirect()->route('patient.index')->with('success', 'Patient Data Updated successfuly But the Photo Is not found on the server');

            }


        } else {

            // Update Every Field Except Photo
            $editPatient->first_name           = $request->first_name;
            $editPatient->last_name            = $request->last_name;
            $editPatient->email                = $request->email;
            $editPatient->gender               = $request->gender;
            $editPatient->phone_one            = $request->phone_one;
            $editPatient->phone_two            = $request->phone_two;
            $editPatient->date_of_birth        = $request->date_of_birth;
            $editPatient->address              = $request->address;
            $editPatient->save();

            return redirect()->route('patient.index')->with('success', 'Patient Data Updated successfuly And No Changes Made For the Photo');

        }
    }

    public function destroy($id)
    {
        // get the row from db using the id of the doctor
        $row = Patient::findOrFail($id);

        // if there is image in db
        if ($row->photo) {
            // get the full path
            $path = '../storage/app/public/patients_photos/'.$row->photo;
            // delete file using path if file exist and delete the row
            if (file_exists($path)) {
                // delete the file
                unlink($path);
                // delete the row in db
                $row->delete();
                // return success message
                return redirect()->route('patient.index')->with('success', 'Patient Data had deleted With the Photo');
            } else {
                // delete the row in db
                $row->delete();
                // return success message
                return redirect()->route('patient.index')->with('success', 'Patient Data had deleted but his photo file not found on the server');
            }
        } else {
            // delete the row in db
            $row->delete();
            // return success message
            return redirect()->route('patient.index')->with('success', 'Patient Data had deleted but no photo found in database to delete');
        }
    }
}
