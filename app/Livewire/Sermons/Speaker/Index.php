<?php

namespace App\Livewire\Sermons\Speaker;

use App\Models\Speaker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\FontWeight;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\Layout\Stack;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;
use Livewire\Component;

class Index extends Component implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(Speaker::withCount('sermons')->orderBy('sermons_count', 'desc'))
            ->columns([
                Split::make([
                    Stack::make([
                        ImageColumn::make('thumbnail')
                            ->defaultImageUrl(url('/images/speaker-placeholder.jpg'))
                            ->size(50)
                            ->circular()
                            ->disk('vultr'),
                    ])
                        ->grow(false),
                    Stack::make([
                        TextColumn::make('name')
                            ->searchable()
                            ->weight(FontWeight::Bold)
                            ->size(TextColumn\TextColumnSize::Medium),
                        TextColumn::make('position'),

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
                            ->state(function (Speaker $record): int {
                                return $record->sermons->count();
                            })
                            ->visibleFrom('md')
                            ->alignment(Alignment::Center),
                    ]),
                ])
                    ->from('md'),

            ])
            ->recordUrl(
                fn (Model $record): string => route('speaker.single', ['slug' => $record->slug]),
            )
            ->filters([

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
        return view('livewire.sermons.speaker.index')
            ->title('Speakers');
    }
}
