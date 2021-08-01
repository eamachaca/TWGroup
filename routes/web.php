<?php

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
Route::get('first', function () {
    dd(
        (new \App\Service\FirstChallengeService)->getFirstQuestionFromAllInvoice(),
        (new \App\Service\FirstChallengeService)->getFirstQuestionFromAnInvoice(1),
        (new \App\Service\FirstChallengeService)->getSecondQuestion(),
        (new \App\Service\FirstChallengeService)->getThirdQuestion()
    );
    return view('welcome');
});
