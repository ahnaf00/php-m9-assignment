<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/home', [ProfileController::class,'home'])->name('home');
Route::get('/about', [ProfileController::class,'about'])->name('about');
Route::get('/contact', [ProfileController::class,'contact'])->name('contact');
Route::get('/projects', [ProfileController::class,'myProject'])->name('projects');
