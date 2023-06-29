<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckupController;
use App\Http\Controllers\PatientBlogController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Patient\ArticleController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Patient\HomeController as PatientHomeController;

/**
 * Routes
 */
Route::get('/login', [HomeController::class, 'home'])->name('home');
Route::get('/', [CheckupController::class, 'website'])->name('website');

/**
 * Admin Routes
 */
Route::prefix('/admin')->group(function () {

    // Ajax Routes Only
    Route::get('/get-active-url', [AdminHomeController::class, 'getActiveUrl'])->name('get_active_url');

    //
    Route::post('/update_api_url', [AdminHomeController::class, 'updateApiUrl'])->name('update_api_url');

    Route::get('/apimachin', [AdminHomeController::class, 'apimachin'])->name('apimachin');
    Route::get('/settings', [AdminHomeController::class, 'settings'])->name('settings');
    Route::get('/home', [AdminHomeController::class, 'home'])->name('admin_home');

    Route::get('/patients', [AdminHomeController::class, 'patients'])->name('manage_patients');

    // admin blog
    Route::resource('/blog', BlogController::class);
    Route::resource('/doctors', DoctorController::class);
});

/**
 * Patient Routes
 */
Route::prefix('/patient')->group(function () {

    // Image Examine
    Route::post('/examine', [CheckupController::class, 'examine'])->name('examine');
    //Route::get('/response', [CheckupController::class, 'patientReport'])->name('response');

    // patient blog
    Route::resource('/patient_articles', ArticleController::class);
    Route::resource('/patient', PatientHomeController::class);
    Route::resource('/checkup', CheckupController::class);

});
