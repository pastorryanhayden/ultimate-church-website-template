<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MinistryResource\Pages;
use App\Filament\Resources\MinistryResource\RelationManagers;
use App\Models\Ministry;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\FileUpload;
use App\Models\Leader;

class MinistryResource extends Resource
{
    protected static ?string $model = Ministry::class;

    protected static ?string $navigationIcon = 'heroicon-o-view-grid';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                FileUpload::make('image')
                ->label('Ministry Image'),
                Select::make('for')
                ->label('The ministry is for...')
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
                Select::make('leader_id')
                ->label('Leader')
                ->options(Leader::all()->pluck('name', 'id'))
                ->searchable(),
                RichEditor::make('meeting_info')
                ->label('Meeting Info'),
                RichEditor::make('body')
                ->label('Description'),
                Checkbox::make('homepage')
                ->label('Show on homepage?'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('for')->sortable(),
                ToggleColumn::make('homepage'),
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
            'index' => Pages\ListMinistries::route('/'),
            'create' => Pages\CreateMinistry::route('/create'),
            'edit' => Pages\EditMinistry::route('/{record}/edit'),
        ];
    }    
}
