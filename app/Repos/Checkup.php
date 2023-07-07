<?php

namespace App\Repos;

use App\Models\ApiLink;
use App\Models\Article;
use App\Models\CheckupDetails;
use App\Models\Disease;
use App\Models\Patient;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class Checkup
{
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
    public function getMLAPI()
    {
        // api link of machine learning model
        return ApiLink::findOrFail(1)->link . "/analysis/process/";
    }
    public function saveResult($now, $disease, $imageName, $patientId)
    {
        $store = new CheckupDetails();
        $store->date_of_examination = $now;
        $removedString = str_replace(['["', '"]'], '', $disease);
        $store->disease = $removedString;
        $store->image_name = $imageName;
        $store->patient_id = $patientId;
        $store->save();
        return CheckupDetails::where('image_name', $imageName)->first();
    }
    public function fetchImage($image_name)
    {
        //? image itself
        $imagePath = storage_path('app\public\samples\\' . $image_name);
        return $imagePath;
    }
    public function analysis($request) :string
    {
        $mlAPI = $this->getMLAPI();
        // $image = $this->fetchImage($imagePath);
        //? (take Machine Learning API Url) , Send -(for it) the Image - (It Self) as external api) and (remains 10 - 20 - 30 seconds and returns => (disease Name))
        // Get the file from the request
        $file = $request->file('image');
        // Read the contents of the image file
        $contents = file_get_contents($file->getPathname());
        // Create a new GuzzleHttp client
        $client = new Client();
        // // Send a POST request to the external API
        ini_set('max_execution_time', 300);
        $response = $client->request('POST', "$mlAPI", [
            'multipart' => [
                [
                    'name' => 'image',
                    'contents' => $contents,
                    'filename' => $file->getClientOriginalName(),
                ],
            ],
        ]);
        // // Handle the API response
        $statusCode = $response->getStatusCode();
        $responseBody = $response->getBody()->getContents();
        $imageName = $this->saveImage($request);
        $patient = $this->fetchPatientData();
        $date_created = Carbon::now()->toDateTimeString();
        $result = $this->saveResult($date_created, "$responseBody", "$imageName", $patient);
        return $this->buildPatientReport($result);
    }
    public function diseaseTreatment(String $disease)
    {
        //? The Article Of This Disease
        return Disease::where('name', $disease)->first();
    }
    public function fetchPatientData()
    {
        $patient = Patient::findOrFail(1);
        return $patient->id;
    }
    public function buildPatientReport($checkupResult)
    {
        $sample = $this->fetchImage($checkupResult->image_name);
        $patient_data = Patient::findOrFail($checkupResult->patient_id);
        $disease = $checkupResult->disease;
        $disease_article = Article::where('title', $checkupResult->disease)->first();
        $date_of_examination = $checkupResult->date_of_examination;
        // extra
        $startTime = Carbon::createFromFormat('Y-m-d', $date_of_examination);
        $ago = $startTime->diffForHumans(Carbon::now());
        // ------------------------ end extra
        return json_encode(["sample" => $sample, "disease" => $disease, "date_of_examination" => $date_of_examination, "taken_since" => $ago, "patient" => $patient_data]);
        // return view('dashboard.patient.checkup-result', compact(['sample','disease', 'date_of_examination', 'ago', 'patient_data', 'disease_article']));
  }
}