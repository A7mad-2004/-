<?php

use App\Http\Controllers\Auth\authController;
use App\Http\Controllers\destination\destinationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('landing',function(){
   return view('user.landing.landing');
})->name('landing');




 ////////////// trips ////////////
Route::get('trips', function(){
    return view('admin.trips.index');
})->name('trips');
Route::get('trip/create', function(){
    return view('admin.trips.create');
})->name('trip.create');
Route::get('trip/{id}/edit', function(){
    return view('admin.trips.edit');
})->name('trip.edit');
Route::get('trip/{id}/show', function(){
    return view('admin.trips.show');
})->name('trip.show');



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

Route::get('dashboard',[\App\Http\Controllers\dashboard\dashboardController::class,'index'])->name('dashboard');


