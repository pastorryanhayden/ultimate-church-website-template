<?php

namespace App\Livewire\Devotion;

use Livewire\Component;
use App\Models\Devotion;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Illuminate\Database\Eloquent\Model;


class Index extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(Devotion::query())
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('text')->sortable()->searchable(),
                TextColumn::make('published_at')->date()->sortable(),
            ])
             ->recordUrl(
                fn (Model $record): string => route('devotion.single', ['id' => $record->id]),
                )
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }

    public function render()
    {
        return view('livewire.devotion.index');
    }
}
