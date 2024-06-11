<?php

namespace App\Livewire\Sermons\Series;

use Livewire\Component;
use App\Models\Series;
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
use Filament\Tables\Columns\Layout\Split;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;

class Single extends Component implements HasForms, HasTable
{
    use InteractsWithTable;
    use InteractsWithForms;

    public $series;

    public function mount($slug)
    {
        $this->series = Series::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.sermons.series.single')
        ->title('Sermon Series: ' . $this->series->title);
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Sermon::where('series_id', $this->series->id))
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('series.photo')
                        ->defaultImageUrl(url('/images/devotional-placeholder.jpg'))
                        ->size(50)
                        ->circular()
                        ,
                    ])
                     ->grow(false),
                    Stack::make([
                        TextColumn::make('title')
                        ->weight(FontWeight::Bold)
                        ->size(TextColumn\TextColumnSize::Medium),
                        ViewColumn::make('text')->view('tables.columns.bible-text'),

                    ]),
                    Stack::make([
                        TextColumn::make('speaker.name')
                        ->label('Speaker')
                        ->weight(FontWeight::Bold),
                        TextColumn::make('date')
                ->label('Date')
                ->date()
                 ->size(TextColumn\TextColumnSize::ExtraSmall),

                 TextColumn::make('service.name')
                ->label('Service')
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
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ])
             ->defaultSort('date', 'asc');
    }
}
