<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TodoController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/todo', [TodoController::class, 'index']);

// Route::prefix('/todo')->group( function () {
//     Route::get('/', [TodoController::class, 'index']);
//     Route::post('/store', [TodoController::class, 'store']);
//     Route::put('/{id}', [TodoController::class, 'update']);
//     Route::delete('/{id}', [TodoController::class, 'destroy']);
// });

Route::get('/todo', [TodoController::class, 'display']);

