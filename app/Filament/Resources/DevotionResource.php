<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DevotionResource\Pages;
use App\Filament\Resources\DevotionResource\RelationManagers;
use App\Models\Devotion;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\Select;
use App\Models\Leader;
use Illuminate\Support\Facades\Auth;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;

class DevotionResource extends Resource
{
    protected static ?string $model = Devotion::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Devotions';


    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Card::make()
            ->schema([
            TextInput::make('title')->placeholder('Look and Live')
            ->maxLength(140)
            ->required(),
            TextInput::make('text')->placeholder('John 3:14-15')
            ->maxLength(140)
            ->required(),
            Checkbox::make('published')
            ->label('Publish this devotion?'),
            DatePicker::make('published_at')
                    ->label('Date to Publish')
                    ->firstDayOfWeek(7)
                    ->required(),
            TextInput::make('video_url')->label('Youtube URL')
            ->placeholder('https://youtube.com/watch?v=...')
            ->url(),
             FileUpload::make('audio_url')->label('MP3 File')->acceptedFileTypes(['audio/mpeg']),
             FileUpload::make('image_url')->label('Image')->image(),
            RichEditor::make('body')->placeholder('Something about the devotion here...')
            ->required(),
            Select::make('leader_id')
                ->label('Author')
                ->options(Leader::all()->pluck('name', 'id'))
                ->searchable()
                ->required(),


                ])
            

            //
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable(),
                TextColumn::make('text')->sortable(),
                ToggleColumn::make('published'),
                TextColumn::make('published_at')->date()->sortable(),
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
            'index' => Pages\ListDevotions::route('/'),
            'create' => Pages\CreateDevotion::route('/create'),
            'edit' => Pages\EditDevotion::route('/{record}/edit'),
        ];
    }    
}
