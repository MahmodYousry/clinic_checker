<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApiLink;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('dashboard.admin.dashboard');
    }

    public function patients()
    {
        return view('dashboard.admin.patients');
    }

    public function settings()
    {
        return view('dashboard.admin.settings');
    }

    public function apimachin()
    {
        return view('dashboard.admin.apimachin');
    }

    // Api Machine Learning
    public function updateApiUrl(Request $request)
    {

        // Validation First
        $validation = $request->validate([
            'link' => 'required'
        ]);

        // get the first row using id 1
        $firstRow = ApiLink::first();

        // if there is no records at all,truncate the whole table first, then make new record with id = 1
        if( $firstRow === null ) {

            // truncate first to make the all the new record take id = 1
            ApiLink::truncate();

            // Store New Record with the Link Given in the Request
            $storeNewRow = new ApiLink();
            $storeNewRow->link = $request->link;
            $storeNewRow->save();

            $myArray = array(
                "link" => $storeNewRow->link,
            );

            $jsonCode = json_encode($myArray);

            // return the link as json style
            return $jsonCode;

        } else { // if there is record the get it and update it

            // Get the First Row Then Update it
            $firstRow->link = $request->link;
            $firstRow->save();

            $myArray = array(
                "link" => $firstRow->link,
            );

            $jsonCode = json_encode($myArray);

            // return the link as string
            return $jsonCode;
        }

    }

    public function getActiveUrl()
    {
        $obj = ApiLink::findOrFail(1);
        return $obj->link;
    }
}
