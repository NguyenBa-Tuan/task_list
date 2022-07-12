<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HandleTaskController;

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


// Route::get('/', [HandleTaskController::class, 'create']);
