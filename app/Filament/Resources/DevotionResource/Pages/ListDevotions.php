<?php

namespace App\Filament\Resources\DevotionResource\Pages;

use App\Filament\Resources\DevotionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDevotions extends ListRecords
{
    protected static string $resource = DevotionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
