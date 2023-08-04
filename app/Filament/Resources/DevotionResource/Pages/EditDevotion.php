<?php

namespace App\Filament\Resources\DevotionResource\Pages;

use App\Filament\Resources\DevotionResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDevotion extends EditRecord
{
    protected static string $resource = DevotionResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
