<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('tasks/create', [TaskController::class,'create'])->name('create_task');
Route::get('tasks', [TaskController::class,'index'])->name('task_list');
Route::post('tasks', [TaskController::class,'store'])->name('store_task');
Route::get('task/{id}/create', [TaskController::class,'createLog'])->name('create_log');
Route::post('task/{id}', [TaskController::class,'storeLog'])->name('store_log');
Route::get('task/{id}', [TaskController::class,'show'])->name('log_list');
Route::post('logs', [TaskController::class,'store'])->name('store_log');
Route::get('/home', [HomeController::class, 'index'])->name('home');
