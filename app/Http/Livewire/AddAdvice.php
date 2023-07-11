<?php

namespace App\Http\Livewire;

use App\Models\Advice;
use Livewire\Component;
use Livewire\WithFileUploads;


class AddAdvice extends Component
{

    use WithFileUploads;

    public $successMessage = '';
    public $show_table = true, $catchError, $updateMode = false;

    // Advice Fields in db
    public $advice_id, $title;

    // RealTime Validation
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'title' => 'required',
        ]);
    }

    // render the component
    public function render()
    {
        $our_advices = Advice::all();
        return view('livewire.advice.add_advice', compact('our_advices'));
    }

    public function create()
    {
        try {

            Advice::create([
                'title' => $this->title,
            ]);

            $this->successMessage = "Your Data Has Been Saved Successfully ";
            $this->clearForm();

            return redirect()->route('manage_advices');
        } catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        }
    }

    public function showFormAdd()
    {
        $this->show_table = false;
    }

    public function edit($id)
    {

        $this->show_table = false;
        $this->updateMode = true;

        // get all medicine info
        $the_Advice = Advice::where('id', $id)->first();

        $this->advice_id        = $id;
        $this->title            = $the_Advice->title;
    }

    public function update()
    {
        try {

            $the_advice = Advice::findOrFail($this->advice_id);
            $the_advice->title   = $this->title;
            $the_advice->save();

            return redirect()->route('manage_advices', ["successMessage" => "Your Data Has Been Updated Successfully !"]);
        } catch (\Exception $e) {
            $this->catchError = $e->getMessage();
        }
    }

    public function delete($id)
    {
        // get the advice
        $my_advice = Advice::findOrFail($id);

        // Delete the data record
        $my_advice->delete();

        // return route
        return redirect()->route('manage_advices');
    }

    public function clearForm()
    {
        $this->title = '';
    }
}
