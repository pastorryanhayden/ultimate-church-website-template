<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Observers\ChapterSermonObserver;
use App\Models\ChapterSermon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        ChapterSermon::observe(ChapterSermonObserver::class);
    }
}
