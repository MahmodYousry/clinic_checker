<?php

namespace App\Repos;

use App\Models\ApiLink;
use App\Models\Disease;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;

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
        $path = storage_path('app\public\samples\\' . $imageName);
        $imagePath = str_replace('\\', '/', $path);
        return $imagePath;
    }
    public function getMLAPI()
    {
        // api link of machine learning model
        return ApiLink::findOrFail(1)->link;
    }
    public function fetchImage($imagePath)
    {
        //? image itself
        return $imagePath;
    }
    public function analysis(String $imagePath,$request) :string
    {
        $mlAPI = $this->getMLAPI();
        // $image = $this->fetchImage($imagePath);
        //? (take Machine Learning API Url) , Send -(for it) the Image - (It Self) as external api) and (remains 10 - 20 - 30 seconds and returns => (disease Name))
        // return $this->getMLAPI();
        // Get the file from the request
        $file = $request->file('image');

        // Create a new GuzzleHttp client
        $client = new Client();

        // Get the file from the request
        $file = $request->file('image');

        // Read the contents of the image file
        $contents = file_get_contents($file->getPathname());

        // Create a new GuzzleHttp client
        $client = new Client();

        // Send a POST request to the external API
        $response = $client->request('POST', 'https://9fbc-197-39-222-67.ngrok-free.app/analysis/process/', [
            'multipart' => [
                [
                    'name' => 'image',
                    'contents' => $contents,
                    'filename' => $file->getClientOriginalName(),
                ],
            ],
        ]);

        // Handle the API response
        $statusCode = $response->getStatusCode();
        $responseBody = $response->getBody()->getContents();

        // Process the response as needed
        // ...

        // Return a response
        return response()->json([
            'status' => $statusCode,
            'body' => $responseBody,
        ]);
    }
    public function diseaseTreatment(String $disease)
    {
        //? The Article Of This Disease
        return Disease::where('name', $disease)->first();
    }
    public function fetchPatientData()
    {
        $patient = Auth::user();
        return $patient;
    }
    public function buildPatientReport(String $imagePath, String $disease)
    {
        // $this->fetchImage($imagePath) => Fetch Image
        // $this->diseaseTreatment($disease) => Return all related to this disease
        // $this->fetchPatientData() => Fetch Patient Data (Name , Age)
        // return array($imagePath, $disease, $fetchPatientData, $diseaseTreatment);

   }
}