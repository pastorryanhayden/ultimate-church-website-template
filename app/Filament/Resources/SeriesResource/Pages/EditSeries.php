<?php

namespace App\Filament\Resources\SeriesResource\Pages;

use App\Filament\Resources\SeriesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSeries extends EditRecord
{
    protected static string $resource = SeriesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
