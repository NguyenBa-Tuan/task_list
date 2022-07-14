<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandleTaskController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\Admin\DashboardController;

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

Route::get('/', [HandleTaskController::class, 'index']);

Route::post('/', [HandleTaskController::class, 'store']);

Route::get('/delete/{id}', [HandleTaskController::class, 'delete']);

Route::get('/update/{id}', [HandleTaskController::class, 'edit']);
Route::post('/update/{id}', [HandleTaskController::class, 'update']);

Route::resource('/posts', PostController::class)->only(['index', 'show']);

Route::resource('/categories', CategoryController::class);

Route::resource('/users', UserController::class);

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');

Route::get('/logout', [LoginController::class, 'logout'])->name('login.logout');


Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware('auth.admin')->prefix('admin')->group(function(){

    Route::resource('posts', PostController::class);

    Route::get('/', [DashboardController::class, 'index']);
});






// Route::get('/', [HandleTaskController::class, 'create']);
