<?php

namespace App\Filament\Resources\TestimonyResource\Pages;

use App\Filament\Resources\TestimonyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTestimony extends EditRecord
{
    protected static string $resource = TestimonyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
