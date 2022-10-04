<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SpecialtyController;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\Admin\PatientController;
use App\Http\Controllers\Doctor\ScheduleController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 
Route::middleware(['auth', '1'])->group(function () {

    //Specialty
    Route::get('/specialties', [SpecialtyController::class, 'index'])->name('home');
    Route::get('/specialties/create', [SpecialtyController::class, 'create'])->name('create');
    Route::get('/specialties/{specialty}/edit', [SpecialtyController::class, 'edit'])->name('edit');
    Route::post('/specialties', [SpecialtyController::class, 'store'])->name('store');
    Route::put('/specialties/{specialty}', [SpecialtyController::class, 'update'])->name('update');
    Route::delete('/specialties/{specialty}/delete', [SpecialtyController::class, 'destroy'])->name('destroy');

    // Doctors
    //Route::resource('doctors',[App\Http\Controllers\DoctorController::class]);
    Route::get('/doctors', [DoctorController::class, 'index'])->name('home');
    Route::get('/doctors/create', [DoctorController::class, 'create'])->name('create');
    Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('edit');
    Route::post('/doctors', [DoctorController::class, 'store'])->name('store');
    Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('update');
    Route::delete('/doctors/{doctor}/delete', [DoctorController::class, 'destroy'])->name('destroy');

    // Patient
    Route::get('/patients', [PatientController::class, 'index'])->name('home');
    Route::get('/patients/create', [PatientController::class, 'create'])->name('create');
    Route::get('/patients/{patient}/edit', [PatientController::class, 'edit'])->name('edit');
    Route::post('/patients', [PatientController::class, 'store'])->name('store');
    Route::put('/patients/{patient}', [PatientController::class, 'update'])->name('update');
    Route::delete('/patients/{patient}/delete', [PatientController::class, 'destroy'])->name('destroy');

});

Route::middleware(['auth', '3'])->group(function () {
    Route::get('/schedule', [ScheduleController::class, 'edit'])->name('edit');
    Route::post('/schedule', [ScheduleController::class, 'store'])->name('store');

});


