<?php

use App\Http\Controllers\DownloadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MainController::class,'index'])->name('home');

Route::get('/home/about',[MainController::class,'About'])->name('home.about');
Route::get('/home/features',[MainController::class,'feature'])->name('home.features');
Route::get('/home/contact',[MainController::class,'contect'])->name('home.contect');
Route::get('/components/downloads',[DownloadController::class,'index'])->name('home.download');