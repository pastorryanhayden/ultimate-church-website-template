<?php

namespace App\Livewire\Sermons;

use Livewire\Component;
use App\Models\Sermon;
use App\Models\Series;
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
use Filament\Tables\Columns\Layout\Split;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Support\Facades\Storage;

class Index extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

     public function table(Table $table): Table
    {
        return $table
            ->query(Sermon::query())
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('series.photo')
                        ->size(50)
                        ->disk('vultr')
                        ->circular()
                        ->defaultImageUrl('/images/series-placeholder.jpg')
                        // ->state(function (Speaker $record): string {
                        //     return $record->thumbnail ? Storage::disk('vultr')->url($record->thumbnail) : '/images/speaker-placeholder.jpg';
                        // })
                       ,
                    ])
                     ->grow(false),
                    Stack::make([
                        TextColumn::make('title')
                        ->searchable()
                        ->weight(FontWeight::Bold)
                        ->size(TextColumn\TextColumnSize::Medium)
                        ->sortable(),
                        ViewColumn::make('text')->view('tables.columns.bible-text'),

                    ]),
                    Stack::make([
                        TextColumn::make('speaker.name')
                        ->label('Speaker')
                        ->searchable()
                        ->weight(FontWeight::Bold)
                        // ->icon('heroicon-m-user-circle')
                        ->sortable(),
                         TextColumn::make('series.title')
                        ->label('Series')
                        ->searchable()
                        // ->url(fn (Sermon $record): string => route('series.single', ['slug' => $record->series->slug]))
                        ->sortable(),
                        TextColumn::make('date')
                ->label('Date')
                ->date()
                ->sortable()
                 ->size(TextColumn\TextColumnSize::ExtraSmall),

                 TextColumn::make('service.name')
                ->label('Service')
                ->sortable()
                ->visibleFrom('md')
                ->size(TextColumn\TextColumnSize::ExtraSmall),

               
                        
                    ]),
                    ])
                ->from('md'),
                

                   
            ])
             ->recordUrl(
                fn (Model $record): string => route('sermon.single', ['slug' => $record->slug]),
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
            ])
            ->defaultSort('date', 'desc');
    }

    public function render(): View
    {
        return view('livewire.sermons.index')
        ->title('Sermons');
    }
}
