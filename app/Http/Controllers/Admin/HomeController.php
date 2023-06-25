<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
}
