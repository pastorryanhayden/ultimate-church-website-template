<?php

namespace App\Providers;

use App\Models\ChapterSermon;
use App\Observers\ChapterSermonObserver;
use App\Services\MarkdownService;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(MarkdownService::class, function ($app) {
            return new MarkdownService();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::directive('markdown', function ($expression) {
            return "<?php echo app(App\Services\MarkdownService::class)->toHtml($expression); ?>";
        });
        ChapterSermon::observe(ChapterSermonObserver::class);
    }
}
