<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Medicine;
use Faker\Provider\Medical;
use GuzzleHttp\Psr7\Request;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;


class AddMedicine extends Component
{

    use WithFileUploads;


    public $successMessage = '';
    public $show_table = true, $catchError, $updateMode = false;

    // Medicine
    public $medicine_id, $name, $image, $expected_price;

    // RealTime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'required',
            'image' => 'required|image',
            'expected_price' => 'required|integer',
        ]);
    }

    // render the component
    public function render()
    {
        $our_medicines = Medicine::all();
        return view('livewire.medicine.add_medicine', compact('our_medicines'));
    }

    public function create()
    {
        try {
            $medicine_image = $this->image;
            $imageName = time() . '.' . $medicine_image->getClientOriginalExtension();

            // store the image file in medicine_image Folder in storage
            $medicine_image->storeAs('public/medicine_images', $imageName);

            Medicine::create([
                'name' => $this->name,
                'image' => $imageName,
                'expected_price' => $this->expected_price,
            ]);

            $this->successMessage = "Your Data Has Been Saved Successfully ";
            $this->clearForm();
        } catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        }
    }

    public function showFormAdd() {
        $this->show_table = false;
    }

    public function edit($id) {

        $this->show_table = false;
        $this->updateMode = true;

        // get all medicine info
        $the_medicine = Medicine::where('id', $id)->first();

        $this->medicine_id      = $id;
        $this->name             = $the_medicine->name;
        $this->expected_price   = $the_medicine->expected_price;
        // $this->image            = $the_medicine->image ? Storage::url('public/medicine_images/'.$the_medicine->image) : '';

    }

    public function update()
    {
        try {

            $the_medicine = Medicine::findOrFail($this->medicine_id);

            $the_medicine->name             = $this->name;
            $the_medicine->expected_price   = $this->expected_price;

            if ($this->image) {
                // Delete the old image file, if it exists
                Storage::delete('public/medicine_images/'.$the_medicine->image);

                // Store the new image file
                $name = $this->image->getClientOriginalName();
                $path = $this->image->storeAs('public/medicine_images', $name);
                $the_medicine->image = $name;
            }

            $the_medicine->save();

            return redirect()->route('manage_medicine', ["successMessage" => "Your Data Has Been Updated Successfully !"]);

        } catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        }

    }

    public function delete($id) {
        $my_medicine = Medicine::findOrFail($id);

        // delete the image first as file
        $disk = Storage::disk('medicine_images');

        // if file exist
        if ($disk->exists($my_medicine->image)) {
            $disk->delete($my_medicine->image);
        }


        // Delete the data record
        $my_medicine->delete();

        // return route
        return redirect()->route('manage_medicine');
    }

    public function clearForm()
    {
        $this->name = '';
        $this->image = '';
        $this->expected_price = '';
    }


}
