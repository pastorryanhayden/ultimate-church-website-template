<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutDetailResource\Pages;
use App\Models\AboutDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class AboutDetailResource extends Resource
{
    protected static ?string $model = AboutDetail::class;

    protected static ?string $modelLabel = 'About Page Details';

    protected static ?string $navigationLabel = 'About Page';

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static ?string $navigationGroup = 'Content';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make([
                    'default' => 1,
                ])
                    ->schema([
                        Forms\Components\TextInput::make('heading')->required(),
                        Forms\Components\TextInput::make('subheading')->required(),
                        Forms\Components\FileUpload::make('image')->disk('vultr')
                            ->directory('images')
                            ->visibility('public')->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('heading'),
                Tables\Columns\TextColumn::make('subheading'),
                Tables\Columns\ImageColumn::make('image')->disk('vultr'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListAboutDetails::route('/'),
            // 'create' => Pages\CreateAboutDetail::route('/create'),
            'edit' => Pages\EditAboutDetail::route('/{record}/edit'),
        ];
    }
}
