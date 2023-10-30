<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LeaderResource\Pages;
use App\Filament\Resources\LeaderResource\RelationManagers;
use App\Models\Leader;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
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
use Filament\Forms\Components\Section;

class LeaderResource extends Resource
{
    protected static ?string $model = Leader::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Main Info')
                ->columns(2)
                ->schema([
                TextInput::make('name')
                ->columnSpan(2)
                ->required(),
                Select::make('position')
                ->options([
                    'Lead Pastor' => 'Lead Pastor',
                    'Youth Pastor' => 'Youth Pastor',
                    'Music Pastor' => 'Music Pastor',
                    'Pastoral Intern' => 'Pastoral Intern',
                    'Deacon' => 'Deacon',
                    'Sunday School Teacher' => 'Sunday School Teacher',
                    'Volunteer' => 'Volunteer'
                ])
                ->columnSpan(2),
                Checkbox::make('pastor')
                ->label('On the pastoral team?')
                ->columnSpan(1),
                Checkbox::make('lead_pastor')
                ->label('Is the lead pastor?')
                ->columnSpan(1),
                Checkbox::make('deacon')
                ->label('On the deacon board?')
                ->columnSpan(1),
            ]),
            Section::make('Image')
            ->schema([
                FileUpload::make('photo')
                ->label('Leader Image')
                ->required(),
            ]),
            Section::make('Contact Info')
            ->columns(2)
            ->schema([
                TextInput::make('phone')
                    ->columnSpan(1),
                TextInput::make('email')
                    ->columnSpan(1),
                TextInput::make('twitter')
                    ->columnSpan(1),
                TextInput::make('facebook')
                    ->columnSpan(1),
                TextInput::make('instagram')
                    ->columnSpan(1),
            ]),
            Section::make('Content')
            ->schema([
                RichEditor::make('bio')
                ->required(),
            ])
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

    protected static ?string $navigationGroup = 'Setup';

    protected static ?int $navigationSort = 5;

}
