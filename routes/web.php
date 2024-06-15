<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomePageController;
use App\Livewire\About\Page as AboutPage;
use App\Livewire\Ministries\Index as MinistryIndex;
use App\Livewire\Ministries\Single as MinistrySingle;
use App\Livewire\Events\Index as EventsIndex;
use App\Livewire\Events\Single as EventsSingle;
use App\Livewire\Devotion\Index as DevotionIndex;
use App\Livewire\Devotion\Single as DevotionSingle;
use App\Livewire\Sermons\Index as SermonsIndex;
use App\Livewire\Sermons\Single as SermonsSingle;
use App\Livewire\Sermons\Printsermon as SermonsPrint;
use App\Livewire\Sermons\Series\Index as SeriesIndex;
use App\Livewire\Sermons\Series\Single as SeriesSingle;
use App\Livewire\Sermons\Speaker\Index as SpeakerIndex;
use App\Livewire\Sermons\Speaker\Single as SpeakerSingle;
use App\Livewire\Blog\Single as BlogSingle;
use App\Livewire\Blog\Index as BlogIndex;

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
Route::get('/devotion', DevotionIndex::class);
Route::get('/devotion/{id}', DevotionSingle::class)->name('devotion.single');
Route::get('/sermons', SermonsIndex::class);
Route::get('print/sermons/{id}', SermonsPrint::class)->name('sermon.print');
Route::get('/sermons/{slug}', SermonsSingle::class)->name('sermon.single');
Route::get('/series', SeriesIndex::class);
Route::get('/series/{slug}', SeriesSingle::class)->name('series.single');
Route::get('/speakers', SpeakerIndex::class);
Route::get('/speaker/{slug}', SpeakerSingle::class)->name('speaker.single');
Route::get('/blog', BlogIndex::class);
Route::get('/blog/{slug}', BlogSingle::class)->name('blog.single');

// This is just for testing to help clear cookies
Route::get('/clear-announcement-cookie', function () {
    Cookie::queue(Cookie::forget('announcement_shown'));
    return redirect('/');
});