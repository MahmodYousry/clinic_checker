<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CheckupController;
use App\Http\Controllers\Patient\CheckupController as Examination;
use App\Http\Controllers\PatientBlogController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Patient\ArticleController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Patient\HomeController as PatientHomeController;
use App\Http\Controllers\Patient\PatientDoctorsController;
use App\Models\Patient;

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
    Route::post('/update_api_url', [AdminHomeController::class, 'updateApiUrl'])->name('update_api_url');

    Route::get('/apimachin', [AdminHomeController::class, 'apimachin'])->name('apimachin');
    Route::get('/settings', [AdminHomeController::class, 'settings'])->name('settings');
    Route::get('/home', [AdminHomeController::class, 'home'])->name('admin_home');

    // All Livewire components
    Route::view('add_medicine', 'livewire.medicine.medicine')->name('manage_medicine');
    Route::view('add_disease', 'livewire.disease.disease')->name('manage_diseases');
    Route::view('add_advice', 'livewire.advice.advice')->name('manage_advices');

    // admin resources
    Route::resource('/patient', PatientController::class);
    Route::resource('/blog', BlogController::class);
    Route::resource('/doctors', DoctorController::class);
});

/**
 * Patient Routes
 */
Route::prefix('/patient')->group(function () {

    // Image Examine
    Route::post('/examine', [Examination::class, 'checkup'])->name('examine');

    //Route::get('/response', [CheckupController::class, 'patientReport'])->name('response');

    // patient blog
    Route::resource('/patient_doctors', PatientDoctorsController::class);
    Route::resource('/patient_articles', ArticleController::class);
    Route::resource('/patientPage', PatientHomeController::class);
    Route::resource('/checkup', CheckupController::class);

});
