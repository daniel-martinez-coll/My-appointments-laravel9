<?php

use Illuminate\Support\Facades\Route;

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

//Specialty
Route::get('/specialties', [App\Http\Controllers\SpecialtyController::class, 'index'])->name('home');
Route::get('/specialties/create', [App\Http\Controllers\SpecialtyController::class, 'create'])->name('create');
Route::get('/specialties/{specialty}/edit', [App\Http\Controllers\SpecialtyController::class, 'edit'])->name('edit');
Route::post('/specialties', [App\Http\Controllers\SpecialtyController::class, 'store'])->name('store');
Route::put('/specialties/{specialty}', [App\Http\Controllers\SpecialtyController::class, 'update'])->name('update');
Route::delete('/specialties/{specialty}/delete', [App\Http\Controllers\SpecialtyController::class, 'destroy'])->name('destroy');


// Doctors
//Route::resource('doctors',[App\Http\Controllers\DoctorController::class]);
Route::get('/doctors', [App\Http\Controllers\DoctorController, 'index'])->name('home');
Route::get('/doctors/create', [App\Http\Controllers\DoctorController, 'create'])->name('create');
// Patient