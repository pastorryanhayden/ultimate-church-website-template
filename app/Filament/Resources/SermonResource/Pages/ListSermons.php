<?php

namespace App\Filament\Resources\SermonResource\Pages;

use App\Filament\Resources\SermonResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSermons extends ListRecords
{
    protected static string $resource = SermonResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
