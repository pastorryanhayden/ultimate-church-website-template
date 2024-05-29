<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\MinistryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\DevotionController;
use App\Http\Controllers\SermonController;
use App\Livewire\About\Page as AboutPage;
use App\Livewire\Ministries\Index as MinistryIndex;

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
Route::get('/ministry/{slug}', [MinistryController::class, 'show']);
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/{slug}', [EventController::class, 'show']);
Route::get('/devotion', [DevotionController::class, 'index']);
Route::get('/devotion/{id}', [DevotionController::class, 'show']);
Route::get('/sermons', [SermonController::class, 'index']);
Route::get('/sermons/{slug}', [SermonController::class, 'show']);
