<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

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

Route::get('/', [FrontendController::class, 'home']);
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');
Route::get('/about', [FrontendController::class, 'about'])->name('about');
Route::get('/service', [FrontendController::class, 'service'])->name('service');
Route::get('/home', [FrontendController::class, 'home'])->name('home');
Route::get('/signup', [FrontendController::class, 'signup'])->name('signup');
Route::get('/login', [FrontendController::class, 'login'])->name('login');
Route::get('/login',function(){return view('login');});
Route::get('/lawyer',function(){return view('lawyer');});

?>
