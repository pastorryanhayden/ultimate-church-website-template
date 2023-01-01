<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Filament\Resources\EventResource\RelationManagers;
use App\Models\Event;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                DatePicker::make('start_date')
                    ->label('Date')
                    ->firstDayOfWeek(7)
                    ->required(),
                DatePicker::make('end_date')
                    ->label('End Date (if multiday)')
                    ->firstDayOfWeek(7),
                Textarea::make('description')
                    ->required()
                    ->minLength(10)
                    ->maxLength(240),
                Select::make('for')
                    ->label('The ministry is for...')
                    ->default('everyone')
                    ->options([
                        'kids' => 'kids',
                        'teens' => 'teens',
                        'everyone' => 'everyone',
                        'seniors' => 'seniors',
                        'men' => 'men',
                        'women' => 'women',
                        'college' => 'college',
                        'boys' => 'boys',
                        'girls' => 'girls'
                    ]),
                Checkbox::make('on_homepage')
                    ->label('Show on homepage?'),
                FileUpload::make('photo'),
                RichEditor::make('body')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable(),
                TextColumn::make('start_date')->date()->sortable(),
                TextColumn::make('end_date')->date(),
                ToggleColumn::make('on_homepage')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }    
}
