<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends \Filament\Pages\Dashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static string $view = 'filament.pages.home-page';
}