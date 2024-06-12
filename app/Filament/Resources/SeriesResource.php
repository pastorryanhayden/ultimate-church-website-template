<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SeriesResource\Pages;
use App\Filament\Resources\SeriesResource\RelationManagers;
use App\Models\Series;
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
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Illuminate\Support\Str;


class SeriesResource extends Resource
{
    protected static ?string $model = Series::class;

    protected static ?string $navigationGroup = 'Sermons';

    protected static ?string $navigationIcon = 'heroicon-o-bars-4';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('title')
                        ->reactive()
                        ->live(onBlur: true)
                        ->required()
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                    ->disabled()
                    ->dehydrated(),
                    Toggle::make('featured'),
                    Textarea::make('description')
                        ->required(),                    
                    ]),
                Section::make('Media')
                ->schema([
                    FileUpload::make('photo')
                    ->disk('vultr')
                    ->directory('images')
                    ->visibility('public')
                    ->image(),
                ]),
                Section::make('Content')
                ->schema([
                    MarkdownEditor::make('body')
                    ->fileAttachmentsDisk('vultr')
                    ->fileAttachmentsDirectory('images')
                    ->fileAttachmentsVisibility('public')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable(),
                TextColumn::make('description')->sortable(),
                ToggleColumn::make('featured'),
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
            'index' => Pages\ListSeries::route('/'),
            'create' => Pages\CreateSeries::route('/create'),
            'edit' => Pages\EditSeries::route('/{record}/edit'),
        ];
    }    
}
