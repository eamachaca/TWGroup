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
    dd(\App\Models\Invoice::with('products')->inRandomOrder()->first());
   return view('welcome');
});
Route::get('first', function () {
    dd(
        (new \App\Service\FirstChallengeService)->getFirstQuestionFromAllInvoice(),
        (new \App\Service\FirstChallengeService)->getFirstQuestionFromAnInvoice(1),
        (new \App\Service\FirstChallengeService)->getSecondQuestion(),
        (new \App\Service\FirstChallengeService)->getThirdQuestion()
    );
    return view('welcome');
});

Auth::routes();

Route::get('tasks/create', [TaskController::class,'create'])->name('create_task');
Route::get('tasks', [TaskController::class,'index'])->name('task_list');
Route::post('tasks', [TaskController::class,'store'])->name('store_task');
Route::get('task/{id}', [TaskController::class,'show'])->name('log_list');
Route::get('task/{id}/create', [TaskController::class,'createLog'])->name('create_log');
Route::post('logs', [TaskController::class,'storeLog'])->name('store_log');
Route::get('/home', [HomeController::class, 'index'])->name('home');
