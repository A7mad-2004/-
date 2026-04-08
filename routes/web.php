<?php

use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\destination\destinationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\usercontroller;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\Admin\Trip\tripcontrol;
use App\Http\Controllers\Trip\tripController;

Route::get('/', function () {
    return view('welcome');
});





 ////////////// trips ////////////
Route::resource('trips', tripController::class);
// Route::get('trips', [tripController::class,'index'])->name('trips.index');
// Route::get('trips/create', [tripController::class,'create'])->name('trips.create');
// Route::post('trips', [tripController::class,'store'])->name('trips.store');
// Route::get('trips/{id}/show', [tripController::class,'show'])->name('trips.show');
// Route::get('trips/{id}/edit', [tripController::class,'edit'])->name('trips.edit');
// Route::put('trips/{id}/update', [tripController::class,'update'])->name('trips.update'); 







/////////////////
/// //////// bookings //////////
Route::get('bookings', function(){
    return view('admin.bookings.index');
})->name('bookings');
Route::get('booking/show', function(){
    return view('admin.bookings.show');
})->name('booking.show');


///////////////////// destinations /////////////
Route::resource('destinations',destinationController::class);
Route::post('destinations/{id}/toggle-status', [destinationController::class, 'toggleStatus'])->name('destinations.toggle-status');
//Route::get('destinations', [destinationController::class,'index'])->name('destinations.index');
//Route::get('destinations/create', [destinationController::class,'create'])->name('destination/create');
//Route::post('destinations', [destinationController::class,'store'])->name('destination.store');
//Route::get('destination/{id}/show', [destinationController::class,'show'])->name('destination.show');
//Route::get('destination/{id}/edit', [destinationController::class,'edit'])->name('destination.edit');
//Route::put('destination/{id}/update', [destinationController::class,'update'])->name('destination.update');
//////////// Auth //////////////////////////
///
Route::get('login',[authController::class,'login'])->name('login');
Route::post('login',[authController::class,'authenticate'])->name('authenticate.login');

Route::get('register',[authController::class,'register'])->name('register');
Route::post('register',[authController::class,'registerPost'])->name('register.store');

Route::get('logout',[authController::class,'logout'])->name('logout');



Route::get('signup', function(){
    return view('auth.signup');
})->name('signup');
Route::get('login', function(){
    return view('auth.login');
})->name('login');
////////////// admin //////////////

Route::get('dashboard',[dashboardController::class,'index'])->name('dashboard');
///////////////// user //////////////
Route::get('landing',[usercontroller::class,'landing'])->name('landing');
Route::get('booking',[usercontroller::class,'booking'])->name('booking');
