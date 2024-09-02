<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about', [
        "name" => "Ujang",
        "email" => "ujanggaming@gmail.com"
    ]);
})->name('about');

Route::get('/contact', function () {
    return view('contact', [
        "telp" => "0888888999999",
        "email" => "ujanggaming@gmail.com"
    ]);
})->name('contact');

Route::get('/posts', [PostController::class,'index']);