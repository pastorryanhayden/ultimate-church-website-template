<?php

namespace App\Filament\Resources\SeriesResource\Pages;

use App\Filament\Resources\SeriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSeries extends ListRecords
{
    protected static string $resource = SeriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
