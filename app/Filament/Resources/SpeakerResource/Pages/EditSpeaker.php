<?php

namespace App\Filament\Resources\SpeakerResource\Pages;

use App\Filament\Resources\SpeakerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSpeaker extends EditRecord
{
    protected static string $resource = SpeakerResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
