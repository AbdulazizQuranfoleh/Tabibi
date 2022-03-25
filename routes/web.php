<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DoctorsController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\isAdmin;
use Illuminate\Support\Facades\Auth;
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


Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/', function () {
      return view('Home.index');
});
Route::get('/doctors', [DoctorsController::class, 'index']);
Route::get('/doctorDetail/{id}', [DoctorsController::class, 'doctorDetail']);

Route::group(['middleware' => ['auth']], function(){
      // [User Routes], All Routes which needs user to be logged in
      Route::get('/book/{id}', [DoctorsController::class, 'bookingView']);
      Route::post('/book/insert/', [DoctorsController::class, 'bookingView']);

      Route::get('/editprofile/{id}', [DoctorsController::class, 'editProfileView']);
      Route::get('/profile', [DoctorsController::class, 'ProfileView']);

      Route::put('/editprofile/update/{id}', [UserController::class, 'updateProfile']);
      
      Route::post('appointments/insert', [AppointmentController::class, 'create']);

});



Route::group(['middleware' => ['auth', 'isAdmin']], function () {
      // [Admin Routes], All Routes which needs user to be logged in
      Route::get('dashboard', [DashboardController::class, 'index']);
      /* Users Start */
      Route::get('dashboard/users', [UserController::class, 'index']);
      Route::get('dashboard/add-user', [UserController::class, 'add']);
      Route::post('dashboard/insert-user', [UserController::class, 'insert']);
      Route::get('dashboard/edit-user/{id}', [UserController::class, 'edit']);
      Route::put('update-user/{id}', [UserController::class, 'update']);
      Route::get('delete-user/{id}', [UserController::class, 'destroy']);
      /* Doctors Start */
      Route::get('dashboard/doctor', [DoctorsController::class, 'indexDoctors']);
      Route::get('dashboard/add-doctor', [DoctorsController::class, 'addDoctor']);
      Route::post('dashboard/insert-doctor', [DoctorsController::class, 'insert']);
      Route::get('dashboard/edit-doctor/{id}', [DoctorsController::class, 'editDoctors']);
      Route::put('update-doctor/{id}', [DoctorsController::class, 'update']);
      Route::get('delete-doctor/{id}', [DoctorsController::class, 'destroy']);

      /* Appointments */
      Route::get('dashboard/appointments', [AppointmentController::class, 'index']);
      Route::get('dashboard/edit-appointments/{id}', [AppointmentController::class, 'edit']);
      Route::put('update-appointments/{id}', [AppointmentController::class, 'update']);
      Route::get('delete-appointments/{id}', [AppointmentController::class, 'destroy']);
});
