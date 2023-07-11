<?php

namespace App\Http\Livewire;

use App\Models\Disease;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddDisease extends Component
{

    use WithFileUploads;


    public $successMessage = '';
    public $show_table = true, $catchError, $updateMode = false;

    // Disease Inputs that are Fields in db
    public $disease_id, $name;

    // RealTime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'name' => 'required',
        ]);
    }

    // render the component
    public function render()
    {
        $our_diseases = Disease::all();
        return view('livewire.disease.add_disease', compact('our_diseases'));
    }

    public function create()
    {
        try {

            Disease::create([
                'name' => $this->name
            ]);

            $this->successMessage = "Your Data Has Been Saved Successfully ";
            $this->clearForm();

            return redirect()->route('manage_diseases');

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
        $disease = Disease::where('id', $id)->first();

        $this->disease_id   = $id;
        $this->name         = $disease->name;

    }

    public function update()
    {
        try {

            $disease = Disease::findOrFail($this->disease_id);

            $disease->name  = $this->name;

            $disease->save();

            return redirect()->route('manage_diseases', ["successMessage" => "Your Data Has Been Updated Successfully !"]);

        } catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        }

    }

    public function delete($id) {
        $disease = Disease::findOrFail($id);

        // Delete the data record
        $disease->delete();

        // return route
        return redirect()->route('manage_diseases');
    }

    public function clearForm()
    {
        $this->name = '';
    }


}
