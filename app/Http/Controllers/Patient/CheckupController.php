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
    public function checkup(Request $request)
    {
        try{
            return $this->handle->analysis($request);

        }catch(Exception $e){
            return Redirect()->back()->with("error","Un Expected Error Please chech Ngrok Url Or Api Link");
        }
    }
}