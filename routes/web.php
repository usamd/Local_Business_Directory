<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('register_employee', [RegisterController::class, 'businessRegisterIndex'])->name('register_employee');
Route::post('register-business', [RegisterController::class, 'registerBusiness'])->name('register.business');
Route::get('register_user', [RegisterController::class, 'userRegisterIndex'])->name('register_user');

Route::get('about-us', [AboutUsController::class, 'AboutUsIndex'])->name('about_us');

