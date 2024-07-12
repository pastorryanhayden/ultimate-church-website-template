<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;

class UCWOverview extends Widget
{
    protected static string $view = 'filament.widgets.u-c-w-overview';

    protected int|string|array $columnSpan = 'full';

    protected static ?int $sort = 1;
}
