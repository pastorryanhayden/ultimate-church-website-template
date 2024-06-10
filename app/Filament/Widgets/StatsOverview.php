<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\PageEvent;
use Carbon\Carbon;

class StatsOverview extends BaseWidget
{
    public $pageviews;
    public $uniquevisitors;
    protected static ?int $sort = 2;




    public function mount()
    {
        $sevenDaysAgo = Carbon::now()->subDays(7);
        $this->pageviews = PageEvent::where('useragent', 'not like', '%bot%')
            ->where('useragent', 'not like', '%python-requests%')
            ->where('useragent', 'not like', '%http%')
            ->where('useragent', 'not like', '%node-fetch%')
            ->where('useragent', 'not like', '%postman%')
            ->where('useragent', 'not like', '%curl%')
            ->where('attribute', 'not like', '%livewire%')
            ->where('attribute', 'not like', '%admin%')
            ->where('created_at', '>=', $sevenDaysAgo)
            ->get();
        $this->uniquevisitors = $this->pageviews->unique('visitorid')->count();

        
    }
    protected function getStats(): array
    {
        return [
            Stat::make('Page views this week', $this->pageviews->count()),
            Stat::make('Visitors this week', $this->uniquevisitors),
        ];
    }
}
