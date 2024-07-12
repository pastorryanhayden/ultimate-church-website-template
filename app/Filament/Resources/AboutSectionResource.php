<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AboutSectionResource\Pages;
use App\Models\AboutSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Guava\FilamentIconPicker\Forms\IconPicker;
use Guava\FilamentIconPicker\Tables\IconColumn;

class AboutSectionResource extends Resource
{
    protected static ?string $model = AboutSection::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Content';

    protected static ?string $navigationParentItem = 'About Page Details';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Top Navigation')
                    ->description('How this section appears at the top of the about page.')
                    ->schema([
                        Forms\Components\TextInput::make('heading')->required(),
                        IconPicker::make('icon')
                            ->required(),
                        Forms\Components\Textarea::make('description')->required(),
                    ]),
                Forms\Components\Section::make('Main Content')
                    ->description('How the actual section will look.')
                    ->schema([
                        Forms\Components\TextInput::make('section_heading')->required(),
                        Forms\Components\MarkdownEditor::make('content')
                            ->fileAttachmentsDisk('vultr')
                            ->fileAttachmentsDirectory('images')
                            ->fileAttachmentsVisibility('public')
                            ->required()
                            ->hint(str('[Uses Markdown](https://www.markdownguide.org/cheat-sheet/)')->inlineMarkdown()->toHtmlString()),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('icon'),
                Tables\Columns\TextColumn::make('heading'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->reorderable('order_column');
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
            'index' => Pages\ListAboutSections::route('/'),
            'create' => Pages\CreateAboutSection::route('/create'),
            'edit' => Pages\EditAboutSection::route('/{record}/edit'),
        ];
    }
}
