<?php

namespace App\Filament\Resources\EventResource\Pages;

use App\Filament\Resources\EventResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Pages\ListRecords\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListEvents extends ListRecords
{
    protected static string $resource = EventResource::class;

   

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'upcoming' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('start_date', '>=', now())->orderBy('start_date', 'asc')),
            'past' => Tab::make()
                ->modifyQueryUsing(fn (Builder $query) => $query->where('start_date', '<', now())->orderBy('start_date', 'desc')),
                 ];
    }
}
