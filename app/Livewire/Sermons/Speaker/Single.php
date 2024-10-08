<?php

namespace App\Livewire\Sermons\Speaker;

use App\Models\BookSermon;
use App\Models\Sermon;
use App\Models\Speaker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Single extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public $speaker;

    public function mount($slug)
    {
        $this->speaker = Speaker::where('slug', $slug)->first();
    }

    public function render()
    {
        return view('livewire.sermons.speaker.single');
    }

    public function table(Table $table): Table
    {
        return $table
            ->query(Sermon::where('speaker_id', $this->speaker->id))
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('series.photo')
                            ->disk('vultr')
                            ->defaultImageUrl(url('/images/series-placeholder.jpg'))
                            ->size(50)
                            ->circular(),
                    ])
                        ->grow(false),
                    Stack::make([
                        TextColumn::make('title')
                            ->weight(FontWeight::Bold)
                            ->size(TextColumn\TextColumnSize::Medium)
                            ->searchable()
                            ->sortable(),
                        ViewColumn::make('text')->view('tables.columns.bible-text'),

                    ]),
                    Stack::make([
                        TextColumn::make('series.title')
                            ->label('Series')
                            ->searchable()
                            ->sortable(),
                        TextColumn::make('date')
                            ->label('Date')
                            ->date()
                            ->size(TextColumn\TextColumnSize::ExtraSmall),

                        TextColumn::make('service.name')
                            ->label('Service')
                            ->visibleFrom('md')
                            ->searchable()
                            ->sortable()
                            ->size(TextColumn\TextColumnSize::ExtraSmall),
                    ]),
                ])
                    ->from('md'),
            ])
            ->recordUrl(
                fn (Model $record): string => route('sermon.single', ['slug' => $record->slug]),
            )
            ->filters([
             SelectFilter::make('Series')
                 ->relationship('series', 'title'),
             SelectFilter::make('Book')
                 ->label('Book')
                 ->relationship('books', 'name', function (Builder $query) {
                     $existingbooks = BookSermon::all()->pluck('book_id');
                     $query = $query->whereIn('books.id', $existingbooks);

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
}
