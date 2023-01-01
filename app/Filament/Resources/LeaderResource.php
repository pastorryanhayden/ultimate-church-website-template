<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeaderResource\Pages;
use App\Filament\Resources\LeaderResource\RelationManagers;
use App\Models\Leader;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Checkbox;

class LeaderResource extends Resource
{
    protected static ?string $model = Leader::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name'),
                Select::make('position')
                ->options([
                    'Lead Pastor' => 'Lead Pastor',
                    'Youth Pastor' => 'Youth Pastor',
                    'Music Pastor' => 'Music Pastor',
                    'Pastoral Intern' => 'Pastoral Intern',
                    'Deacon' => 'Deacon',
                    'Sunday School Teacher' => 'Sunday School Teacher',
                    'Volunteer' => 'Volunteer'
                ]),
                FileUpload::make('photo')
                ->label('Leader Image'),
                TextInput::make('phone'),
                TextInput::make('email'),
                TextInput::make('twitter'),
                TextInput::make('facebook'),
                TextInput::make('instagram'),
                RichEditor::make('bio'),
                Checkbox::make('pastor')
                ->label('On the pastoral team?'),
                Checkbox::make('lead_pastor')
                ->label('Is the lead pastor?'),
                Checkbox::make('deacon')
                ->label('On the deacon board?'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('position'),
                TextColumn::make('email'),
                TextColumn::make('phone')
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
            'index' => Pages\ListLeaders::route('/'),
            'create' => Pages\CreateLeader::route('/create'),
            'edit' => Pages\EditLeader::route('/{record}/edit'),
        ];
    }    
}
