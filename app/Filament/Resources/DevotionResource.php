<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DevotionResource\Pages;
use App\Models\Devotion;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;

class DevotionResource extends Resource
{
    protected static ?string $model = Devotion::class;

    protected static ?string $navigationIcon = 'heroicon-o-book-open';

    protected static ?string $navigationGroup = 'Blogs and Devotions';

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
                        FileUpload::make('audio_url')->disk('vultr')
                            ->directory('mp3')
                            ->visibility('public')->label('MP3 File')->acceptedFileTypes(['audio/mpeg']),
                        FileUpload::make('image_url')->disk('vultr')
                            ->directory('images')
                            ->visibility('public')->label('Image')->image(),
                        Forms\Components\MarkdownEditor::make('body')
                            ->fileAttachmentsDisk('vultr')
                            ->fileAttachmentsDirectory('images')
                            ->fileAttachmentsVisibility('public')
                            ->placeholder('Something about the devotion here...')
                            ->hint(str('[Uses Markdown](https://www.markdownguide.org/cheat-sheet/)')->inlineMarkdown()->toHtmlString())
                            ->required()
                            ->hint(str('[Uses Markdown](https://www.markdownguide.org/cheat-sheet/)')->inlineMarkdown()->toHtmlString()),

                    ]),

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
            ])
            ->defaultSort('created_at', 'desc');
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
