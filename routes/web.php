<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FixtureController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TournamentController;
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

Route::get('/', [IndexController::class, 'index'])->name('index');

// About
Route::get('/about-us', [AboutController::class, 'index'])->name('about');


// fixtures
Route::get('/fixtures', [FixtureController::class, 'index'])->name('fixture');


// tournament
Route::get('/tournament/{slug}', [TournamentController::class, 'show'])->name('tournament.show');

// gallery
Route::get('/gallery/list', [GalleryController::class, 'index'])->name('gallery.list');
Route::get('/gallery/{slug}/images/list', [GalleryController::class, 'show'])->name('gallery.image');

// karate TV
Route::group(['middleware' => 'auth'], function () {
Route::get('/karate-tv', [GalleryController::class, 'video'])->name('karate.tv');
});


// News
Route::get('/news', [BlogController::class, 'index'])->name('news');
Route::get('/news/{slug}', [BlogController::class, 'show'])->name('news.show');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/comment/post', [CommentController::class, 'store'])->name('comment.post');

// Route::redirect('/register', '/login');
