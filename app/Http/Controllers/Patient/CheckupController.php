<?php

namespace App\Http\Controllers\Patient;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repos\Checkup;
use Exception;
use Illuminate\Support\Facades\Response;

class CheckupController extends Controller
{
    protected Checkup $handle;
    public function __construct(Checkup $handle){
        $this->handle = $handle;
    }


    public function saveImage($request): string
    {
        /**
         *         validation Image
         */
        $validation = $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        /**
         *         Save Image In Storage
         */
        // Asign Photo Name
        // $photoName = $request->image->getClientOriginalName();
        $imageName = time() . '.' . $request->image->extension();
        $file = $request->file('image');

        // Make Folder with doctors_photos if not exist then move the photo there
        $file->storeAs('public/samples', $imageName);

        /**
         *         Get Image Path
         */
        // $path = storage_path('app\public\samples\\' . $imageName);
        // $imagePath = str_replace('\\', '/', $path);
        return $imageName;
    }

    public function fetchImage($image_name)
    {
        //? image itself
        $imagePath = storage_path('app\public\samples\\' . $image_name);
        return $imagePath;
    }

    public function checkup(Request $request)
    {
        // try{
        // return $this->handle->analysis($request);
        $imageName = $this->saveImage($request);
        $sample = $this->fetchImage($imageName);
            return json_encode(
                [
                "sample" => $sample,
                "disease" => " acne",
                "date_of_examination" => "2023-07-07",
                "taken_since" => "1 second before",
                "patient" => [
                                "id"=>1,
                                "first_name"=>"Ahmed",
                                "last_name"=>"Alaa",
                                "gender"=>"female",
                                "photo"=>"Capture-removebg-preview (1).png",
                                "date_of_birth"=>"2023-07-13",
                                "phone_one"=>"+201099644971",
                                "phone_two"=>"+201099644971",
                                "email"=>"ehab.developer.email@gmail.com",
                                "address"=>"6 Soliman Gawhar, Boulaq Num.4, Dokki, Giza Governorate 3753002",
                                "created_at"=>"2023-07-04T13:00:15.000000Z",
                                "updated_at"=>"2023-07-04T13:40:15.000000Z"
                            ]
                ]
            );

        // }catch(Exception $e){
        //     return Redirect()->back()->with("error","Un Expected Error Please chech Ngrok Url Or Api Link");
        // }
    }
}