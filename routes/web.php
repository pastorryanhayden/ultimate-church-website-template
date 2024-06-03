<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\DevotionController;
use App\Http\Controllers\SermonController;
use App\Livewire\About\Page as AboutPage;
use App\Livewire\Ministries\Index as MinistryIndex;
use App\Livewire\Ministries\Single as MinistrySingle;
use App\Livewire\Events\Index as EventsIndex;
use App\Livewire\Events\Single as EventsSingle;

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

Route::get('/', [HomePageController::class, 'show']);
Route::get('/about', AboutPage::class);
Route::get('/ministries', MinistryIndex::class);
Route::get('/ministry/{slug}', MinistrySingle::class);
Route::get('/events', EventsIndex::class);
Route::get('/events/{slug}', EventsSingle::class);
Route::get('/devotion', [DevotionController::class, 'index']);
Route::get('/devotion/{id}', [DevotionController::class, 'show']);
Route::get('/sermons', [SermonController::class, 'index']);
Route::get('/sermons/{slug}', [SermonController::class, 'show']);

// This is just for testing to help clear cookies
Route::get('/clear-announcement-cookie', function () {
    Cookie::queue(Cookie::forget('announcement_shown'));
    return redirect('/');
});