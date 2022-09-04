<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task;


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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/task', [TaskController::class, 'index']);

Route::get('/task/create', [TaskController::class, 'create']);
Route::post('/task/create', [TaskController::class, 'store']);

Route::get('/task/edit/{id}', [TaskController::class, 'edit']);
Route::post('/task/update/{id}', [TaskController::class, 'update']);

Route::get('/task/delete/{id}', [TaskController::class, 'destroy']);
