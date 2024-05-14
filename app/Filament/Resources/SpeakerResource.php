<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpeakerResource\Pages;
use App\Filament\Resources\SpeakerResource\RelationManagers;
use App\Models\Speaker;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

// Column Classes
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;

//Form Classes
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Section;
use Illuminate\Support\Str;

class SpeakerResource extends Resource
{
    protected static ?string $model = Speaker::class;

    protected static ?string $navigationGroup = 'Sermons';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name')
                        ->reactive()
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                    ->disabled()
                    ->dehydrated(),
                    Select::make('position')
                ->options([
                    'Lead Pastor' => 'Lead Pastor',
                    'Youth Pastor' => 'Youth Pastor',
                    'Music Pastor' => 'Music Pastor',
                    'Pastoral Apprentice' => 'Pastoral Apprentice',
                    'Deacon' => 'Deacon',
                    'Sunday School Teacher' => 'Sunday School Teacher',
                    'Missionary' => 'Missionary',
                    'Evangelist' => 'Evangelist',
                    'Special Speaker' => 'Special Speaker',
                    'Elder' => 'Elder',
                    'Other' => 'Other',
                ])
                    ]),
                Section::make('Media')
                ->schema([
                    FileUpload::make('thumbnail')
                    ->image(),
                ]),
                Section::make('Content')
                ->schema([
                    RichEditor::make('bio')
                ->label('Content')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('position')->sortable(),
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
            'index' => Pages\ListSpeakers::route('/'),
            'create' => Pages\CreateSpeaker::route('/create'),
            'edit' => Pages\EditSpeaker::route('/{record}/edit'),
        ];
    }    
}
