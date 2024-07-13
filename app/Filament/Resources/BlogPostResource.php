<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Table;
use Illuminate\Support\Str;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Blogs and Devotions';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Details')
                    ->description('Information about the post')
                    ->columns(4)
                    ->collapsible()
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->reactive()
                            ->live(onBlur: true)
                            ->columnSpan(2)
                            ->required()
                            ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->columnSpan(2)
                            ->disabled()
                            ->dehydrated(),
                        Forms\Components\Textarea::make('description')
                            ->required()
                            ->columnSpan(4),
                        Select::make('speaker_id')
                            ->columnSpan(3)
                            ->relationship(name: 'author', titleAttribute: 'name')
                            ->label('Author')
                            ->helperText('This comes from the "speaker" section under sermons.')
                            ->preload()
                            ->required()
                            ->createOptionForm([
                                TextInput::make('name')
                                    ->reactive()
                                    ->live(onBlur: true)
                                    ->required()
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
                                    ]),
                            ])
                            ->searchable(),
                        Forms\Components\Toggle::make('published')
                            ->columnSpan(1),
                        Forms\Components\Toggle::make('permenantly_featured')
                            ->columnSpan(3)
                            ->helperText('If this is selected, it will be permenantly featured on the home page and the most recent post will not show.  This only works on one post.'),
                        Forms\Components\FileUpload::make('image')
                            ->label('Featured Image')
                            ->disk('vultr')
                            ->directory('images')
                            ->visibility('public')
                            ->columnSpan(4)
                            ->required(),
                    ]),
                Forms\Components\Section::make('Post')
                    ->schema([
                        Forms\Components\MarkdownEditor::make('body')
                            ->fileAttachmentsDisk('vultr')
                            ->fileAttachmentsDirectory('images')
                            ->fileAttachmentsVisibility('public')
                            ->hint(str('[Uses Markdown](https://www.markdownguide.org/cheat-sheet/)')->inlineMarkdown()->toHtmlString())
                            ->required(),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('author.name')
                    ->searchable()
                    ->sortable(),
                ToggleColumn::make('published'),
                ToggleColumn::make('permenantly_featured'),
                TextColumn::make('created_at')
                    ->label('Date')
                    ->date()
                    ->sortable(),
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
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }
}
