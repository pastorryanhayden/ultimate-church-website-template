<?php

namespace App\Livewire\Sermons;

use Livewire\Component;
use App\Models\Sermon;
use Illuminate\Contracts\View\View;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\Filter;
use App\Models\BookSermon;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Support\Enums\Alignment;

class Index extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

     public function table(Table $table): Table
    {
        return $table
            ->query(Sermon::query())
            ->columns([
                 TextColumn::make('title')
                ->searchable()
                ->sortable(),
                TextColumn::make('date')
                ->label('Date')
                ->date()
                ->sortable(),
                   TextColumn::make('speaker.name')
                ->label('Speaker')
                ->searchable()
                ->sortable(),
                TextColumn::make('series.title')
                ->label('Series')
                ->searchable()
                ->sortable(),
                ViewColumn::make('text')->view('tables.columns.bible-text'),
                // TextColumn::make('texts'),
                TextColumn::make('service.name')
                ->label('Service')
                ->sortable(),
            ])
             ->recordUrl(
                fn (Model $record): string => route('devotion.single', ['id' => $record->id]),
                )
            ->filters([
                 SelectFilter::make('Speaker')
                    ->relationship('speaker', 'name'),
                SelectFilter::make('Series')
                    ->relationship('series', 'title'),
                SelectFilter::make('Book')
                    ->label('Book')
                    ->relationship('books', 'name', function (Builder $query) {
                        $existingbooks = BookSermon::all()->pluck('book_id');
                        $query =  $query->whereIn('books.id', $existingbooks);
                        return $query->orderBy('books.id');
                        }),
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }

    public function render(): View
    {
        return view('livewire.sermons.index');
    }
}
