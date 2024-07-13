<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SpeakerResource\Pages;
use App\Models\Speaker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
// Column Classes
use Filament\Forms\Form;
//Form Classes
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Str;

class SpeakerResource extends Resource
{
    protected static ?string $model = Speaker::class;

    protected static ?string $navigationGroup = 'Sermons';

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Details')
                    ->schema([
                        TextInput::make('name')
                            ->reactive()
                            ->required()
                            ->live(onBlur: true)
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
                    ]),
                Section::make('Media')
                    ->schema([
                        FileUpload::make('thumbnail')
                            ->image()
                            ->disk('vultr')
                            ->directory('images')
                            ->visibility('public'),
                    ]),
                Section::make('Content')
                    ->schema([
                        MarkdownEditor::make('bio')
                            ->fileAttachmentsDisk('vultr')
                            ->fileAttachmentsDirectory('images')
                            ->fileAttachmentsVisibility('public')
                            ->label('Content'),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->modifyQueryUsing(fn (Builder $query) => $query->withCount('sermons'))
            ->columns([
                TextColumn::make('name')->sortable(),
                TextColumn::make('position')->sortable(),
                TextColumn::make('sermons_count')->label('Sermons')->sortable(),
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
            ->defaultSort('sermons_count', 'desc');
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
            'index' => Pages\ListSpeakers::route('/'),
            'create' => Pages\CreateSpeaker::route('/create'),
            'edit' => Pages\EditSpeaker::route('/{record}/edit'),
        ];
    }
}
