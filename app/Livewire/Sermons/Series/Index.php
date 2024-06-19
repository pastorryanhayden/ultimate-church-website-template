<?php

namespace App\Livewire\Sermons\Series;

use Livewire\Component;
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
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Support\Enums\Alignment;
use Filament\Tables\Columns\Layout\Split;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;

class Index extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(Series::withCount('sermons')->orderBy('sermons_count', 'desc'))
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('photo')
                        ->disk('vultr')
                        ->defaultImageUrl(url('/images/series-placeholder.jpg'))
                        ->size(50)
                        ->circular()
                        ,
                    ])
                     ->grow(false),
                    Stack::make([
                        TextColumn::make('title')
                        ->searchable()
                        ->weight(FontWeight::Bold)
                        ->size(TextColumn\TextColumnSize::Medium),
                        TextColumn::make('description'),

                    ]),
                    Stack::make([
                         TextColumn::make('sermons_label')
                         ->label('Sermons')
                         ->state(function (): string {
                            return 'Sermons';
                        })
                         ->visibleFrom('md')
                         ->alignment(Alignment::Center),
                         TextColumn::make('sermon_count')
                        ->label('Sermons')
                        ->state(function (Series $record): int {
                            return $record->sermons->count();
                        })
                        ->visibleFrom('md')
                         ->alignment(Alignment::Center),
                    ]),
                    ])
                ->from('md'),
                

                   
            ])
             ->recordUrl(
                fn (Model $record): string => route('series.single', ['slug' => $record->slug]),
                )
            ->filters([
                
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ])
            ;
    }

    public function render()
    {
        return view('livewire.sermons.series.index')
	->title('Sermon Series');
    }
}
