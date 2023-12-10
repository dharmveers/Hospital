<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[HomeController::class,'index']);

Route::get('/home',[HomeController::class,'redirect']);

Route::get('/showAppointment',[HomeController::class,'showAppointment']);

Route::get('/delete_Appointment/{id}',[HomeController::class,'delete_Appointment']);

Route::get('/add_doctor',[AdminController::class,'addView']);

Route::post('/uploads_doctor',[AdminController::class,'upload_Details']);

Route::get('/showAppointment',[AdminController::class,'showAppointment']);

Route::get('/approved/{id}',[AdminController::class,'approveAppointment']);

Route::get('/cancled/{id}',[AdminController::class,'cancleAppointment']);

Route::get('/showDoctors',[AdminController::class,'allDoctors']);

Route::get('/deleted/{id}',[AdminController::class,'deleteDoctor']);

Route::get('/updated/{id}',[AdminController::class,'updateDoctor']);

Route::post('/appointment',[HomeController::class,'dr_Appointment']);

Route::post('/edit_doctor/{id}',[AdminController::class,'editdoctor']);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
