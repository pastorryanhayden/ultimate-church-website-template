<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogPostResource\Pages;
use App\Filament\Resources\BlogPostResource\RelationManagers;
use App\Models\BlogPost;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Set;
use Filament\Forms\Get;
use Illuminate\Support\Str;
use Filament\Tables\Columns\TextColumn;

class BlogPostResource extends Resource
{
    protected static ?string $model = BlogPost::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Time Sensative';

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
                    Forms\Components\TextInput::make('author')
                    ->required()
                     ->columnSpan(3),
                    Forms\Components\Toggle::make('published')
                     ->columnSpan(1),
                    Forms\Components\FileUpload::make('image')
                    ->label('Featured Image')
                    ->disk('vultr')
                    ->directory('images')
                    ->visibility('public')
                    ->columnSpan(4)
                    ->required()
                ]),
                Forms\Components\Section::make('Post')
                ->schema([
                    Forms\Components\MarkdownEditor::make('body')
                    ->fileAttachmentsDisk('vultr')
                    ->fileAttachmentsDirectory('images')
                    ->fileAttachmentsVisibility('public')
                    ->hint(str('[Uses Markdown](https://www.markdownguide.org/cheat-sheet/)')->inlineMarkdown()->toHtmlString())
                    ->required(),
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                ->searchable()
                ->sortable(),
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
            'index' => Pages\ListBlogPosts::route('/'),
            'create' => Pages\CreateBlogPost::route('/create'),
            'edit' => Pages\EditBlogPost::route('/{record}/edit'),
        ];
    }    
}
