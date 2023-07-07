<?php

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

use Illuminate\Support\Facades\Route;
use Modules\Match\Http\Controllers\MatchController;

Route::group(['middleware' => 'auth'], function () {
    Route::resource('match', 'MatchController');
    Route::get('match/status/{id}',[MatchController::class,'status'])->name('match.status');
});
