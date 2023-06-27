<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApiLink;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    public function home()
    {
        return view('dashboard.admin.index');
    }

    public function index()
    {
        return view('dashboard.admin.dashboard');
    }

    public function patients()
    {
        return view('dashboard.admin.patients');
    }

    public function create()
    {
        return view('dashboard.admin.create');
    }

    public function edit()
    {
        return view('dashboard.admin.edit');
    }

    public function settings()
    {
        return view('dashboard.admin.settings');
    }

    public function apimachin()
    {
        return view('dashboard.admin.apimachin');
    }
    
    //Api Machine Learning
    public function updateApiUrl(Request $request)
    {
        return $request;
        // $validation = $request->validate([
        //     'link' => 'required'
        // ]);
        // if (!$validation) {
        //     return 0;
        // }
        // $obj = ApiLink::where('id', 1)->first();

        // if(isNull($obj)){
        //     ApiLink::truncate();
        //     $obj->link = $request->link;
        // }

    }
    public function getActiveUrl()
    {
        $obj = ApiLink::findOrFail(1);
        $activeUrl = $obj->link;
        return $activeUrl;
    }
}