<?php

namespace App\Filament\Resources\AboutDetailResource\Pages;

use App\Filament\Resources\AboutDetailResource;
use App\Models\AboutDetail;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAboutDetails extends ListRecords
{
    protected static string $resource = AboutDetailResource::class;

    public function mount(): void
    {
        parent::mount();

        // Redirect to the edit page of the first record
        $record = AboutDetail::first();
        if (! $record) {
            $record = new AboutDetail;
            $record->heading = 'Considering Visiting Bible Bapist?';
            $record->subheading = 'This page should answer most of the questions you may have about our church.';
            $record->save();
        }
        redirect()->to(AboutDetailResource::getUrl('edit', ['record' => $record]));
    }

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }
}
