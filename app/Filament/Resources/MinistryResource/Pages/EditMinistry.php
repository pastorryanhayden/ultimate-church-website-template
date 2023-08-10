<?php

namespace App\Filament\Resources\MinistryResource\Pages;

use App\Filament\Resources\MinistryResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMinistry extends EditRecord
{
    protected static string $resource = MinistryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
