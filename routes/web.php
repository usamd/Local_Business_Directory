<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ChatController;

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

Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::get('/settings', [UserController::class, 'settings'])->name('settings');
Route::get('/userdetails', [ProfileController::class, 'edit'])->middleware('auth');
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
Route::get('/users', [ChatController::class, 'getUsers']);

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//logout route for the chat.vue
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});


Route::controller(MessageController::class)->group(function(){
    Route::get('messages','sendMessages');
    Route::get('messages','fetchMessages');
});

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/user/update', [UserController::class, 'update']);
});

// Route::get('/messageDashboard', function () {
//     return view('messageDashboard');
// })->name('messageDashboard');
