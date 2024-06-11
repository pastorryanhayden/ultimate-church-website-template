<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SermonResource\Pages;
use App\Filament\Resources\SermonResource\RelationManagers;
use App\Models\Sermon;
use App\Models\Speaker;
use App\Models\Series;
use App\Models\Book;
use App\Models\BookSermon;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Radio;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Set;
use Filament\Forms\Get;
use Illuminate\Support\Str;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\FileUpload;
use App\Services\GetYoutubeIdService;
use App\Services\CleanUpManuscriptService;
use Doctrine\DBAL\Schema\View;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Columns\ViewColumn;
use Filament\Tables\Filters\Filter;


class SermonResource extends Resource
{
    protected static ?string $model = Sermon::class;

    protected static ?string $navigationGroup = 'Sermons';

    protected static ?string $navigationIcon = 'heroicon-o-microphone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Main Details')
                // ->aside()
                ->description('The main details of the sermon.')
                ->columns(['md' => 2])
                ->schema([
                    TextInput::make('title')
                    ->columnSpan(['md' => 1])
                    ->live(onBlur: true)
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }
                    
                        $set('slug', Str::slug($state));
                    }),
                    TextInput::make('slug')
                    ->disabled()
                    ->dehydrated()
                    ->columnSpan(['md' => 1]),
                    Textarea::make('description')
                    ->columnSpan(2),
                    DatePicker::make('date')
                    ->label('Date of Sermon')
                    ->columnSpan(['sm' => 2,  'md' => 1]),
                    Checkbox::make('featured')
                    ->columnSpan(['sm' => 2,  'md' => 1]),
                    Select::make('speaker')
                    ->columnSpan(2)
                    ->relationship(name: 'speaker', titleAttribute: 'name')
                    ->label('Speaker')
                    ->preload()
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
                ])
                    ])
                    ->searchable(),
                    Select::make('series')
                    ->columnSpan(2)
                    ->relationship(name: 'series', titleAttribute: 'title')
                    ->label('Series')
                    ->preload()
                    ->createOptionForm([
                        TextInput::make('title')
                        ->reactive()
                        ->required()
                        ->live(onBlur: true)
                        ->afterStateUpdated(fn ($state, callable $set) => $set('slug', Str::slug($state))),
                    TextInput::make('slug')
                    ->disabled()
                    ->dehydrated(),
                    Textarea::make('description')
                        ->required(),   
                    ])
                    ->searchable(),
                    Select::make('service')
                    ->columnSpan(2)
                    ->relationship(name: 'service', titleAttribute: 'name')
                    ->label('Service')
                    ->preload()
                    
                    ->createOptionForm([
                        TextInput::make('name')
                        ->required(),
                    ])
                    ->editOptionForm([
                        TextInput::make('name')
                        ->required(),
                    ])
                    ]),
                    Section::make('Bible Texts')
                    // ->aside()
                    ->description('The Bible chapter for this text.  This allows us to filter and sort sermons by Bible Text.')
                    ->columns(1)
                    ->schema([
                        Repeater::make('chapterSermons')
                        ->label('Texts')
                        ->relationship()
                        ->addActionLabel('Add text')
                        ->defaultItems(0)
                        ->columns(['md' => 3])
                        ->schema([
                            Select::make('book_id')
                        ->columnSpan(['sm' => 2,  'md' => 1])
                        ->live(onBlur: true)
                        ->label('Book')
                        ->relationship(name: 'book', titleAttribute: 'name', modifyQueryUsing: function (Builder $query) {
                            $query->orderBy('id');
                        })
                        ->searchable()
                        ->preload(),
                        Select::make('chapter_id')
                        ->columnSpan(['sm' => 2,  'md' => 1])
                        ->label('Chapter')
                        ->relationship(name: 'chapter', titleAttribute: 'number', modifyQueryUsing: function (Builder $query, Get $get) {
                            $query->where('book_id', $get('book_id'));
                        })
                        ->searchable()
                        ->preload()
                        ->hidden(fn (Get $get): bool =>  $get('book_id') === null),
                        TextInput::make('verse')
                        ->columnSpan(['sm' => 2,  'md' => 1])
                        ->label('Verses')
                        ->placeholder('1-4')
                        ->hidden(fn (Get $get): bool =>  $get('book_id') === null)
                        ])
                    ]),
                    Section::make('Media')
                    // ->aside()
                    ->description('The audio and video files for the sermon. In order for podcasting to work, the sermon must have an MP3 file. We suggest having a video file or a sermon file at a minimum, but the sermons will show without them.')
                    ->columns(['md' => 2])
                    ->schema([
                        FileUpload::make('mp3')
                        ->acceptedFileTypes(['audio/mpeg', 'audio/mp3'])
                        ->columnSpan(2),
                        TextInput::make('youtube_url')
                        ->label('Video URL')
                        ->placeholder('https://www.youtube.com/watch?v=4ZqR_M20Y48')
                        ->helperText('The video must be hosted on YouTube. Paste the URL of the video here.')
                        ->live()
                        ->afterStateUpdated(function (Set $set, ?string $state) {
                            if($state == null) return;
                            $set('youtube_id', GetYoutubeIdService::getId($state));
                        }),
                        TextInput::make('youtube_id')
                        ->disabled()
                        ->dehydrated()
                        ->label('YouTube ID'),
                    ]),
                    Section::make('Text Content')
                    // ->aside()
                    ->description('The text content for the sermon (optional).')
                    ->columns(1)
                    ->schema([
                        MarkdownEditor::make('manuscript')
                        ->hint(str('[Uses Markdown](https://www.markdownguide.org/cheat-sheet/)')->inlineMarkdown()->toHtmlString())
                    ])
                    ->collapsed(),
                   Section::make('Additional Media')
                    // ->aside()
                    ->collapsed()
                    ->description('These are less common media types that can be added to the sermon.')
                    ->columns(['md' => 2])
                    ->schema([
                        FileUpload::make('slides')
                        ->acceptedFileTypes(['application/pdf'])
                        ->columnSpan(2),
                        FileUpload::make('handout')
                        ->acceptedFileTypes(['application/pdf'])
                        ->columnSpan(2),

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
                TextColumn::make('date')
                ->label('Date')
                ->date()
                ->sortable(),
                TextColumn::make('speaker.name')
                ->label('Speaker')
                ->searchable()
                ->sortable(),
                TextColumn::make('series.title')
                ->label('Series')
                ->searchable()
                ->sortable(),
                ViewColumn::make('text')->view('tables.columns.bible-text'),
                // TextColumn::make('texts'),
                TextColumn::make('service.name')
                ->label('Service')
                ->sortable(),
            ])
            ->defaultSort('date', 'desc')
            ->filters([
                SelectFilter::make('Speaker')
                    ->relationship('speaker', 'name'),
                SelectFilter::make('Series')
                    ->relationship('series', 'title'),
                SelectFilter::make('Book')
                    ->label('Book')
                    ->relationship('books', 'name', function (Builder $query) {
                        $existingbooks = BookSermon::all()->pluck('book_id');
                        $query =  $query->whereIn('books.id', $existingbooks);
                        return $query->orderBy('books.id');
                        }),
                    // ->query(function (Builder $query, $value) {
                    //     dd($value);
                    //     return $query->whereHas('chapterSermons', function ($query) use ($value) {
                    //         $query->where('books_id', $value);
                    //     });
                    // })
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
            'index' => Pages\ListSermons::route('/'),
            'create' => Pages\CreateSermon::route('/create'),
            'edit' => Pages\EditSermon::route('/{record}/edit'),
        ];
    }    

    
}
