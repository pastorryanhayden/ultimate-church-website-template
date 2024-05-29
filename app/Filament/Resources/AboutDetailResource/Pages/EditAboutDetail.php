<?php

namespace App\Filament\Resources\AboutDetailResource\Pages;

use App\Filament\Resources\AboutDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\AboutDetail;

class EditAboutDetail extends EditRecord
{
    protected static string $resource = AboutDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }

     public function mount($record = null): void
    {
        // Ensure only the first record is loaded for editing
        $this->record = AboutDetail::firstOrFail();
        parent::mount($this->record->getKey());
    }
}
