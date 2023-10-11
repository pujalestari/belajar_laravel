<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/home' ,[HomeController::class 'home']);


//Jalur Route ke halaman Welcome 
Route::get('/welcome', function () {
    return 'welcome';
});
    
//Jalur Route ke halaman About Us 
Route::get('/about', function () {
    return 'About Us';
});

//Jalur Route ke halaman Contact Us  
Route::get('/contact', function () {
    return 'Contact Us';
});