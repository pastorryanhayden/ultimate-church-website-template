<?php

namespace App\Filament\Pages;

## Filament Stuff
use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Components\Tabs;
use Filament\Actions\Action;
use Filament\Notifications\Notification;


## Models
use App\Models\AboutPage as AboutPageModel;

## Form Fields
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Placeholder;


class AboutPage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-question-mark-circle';

    protected static string $view = 'filament.pages.about-page';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Setup';

    public ?array $data = [];

    public function mount(): void 
    {
        if (!AboutPageModel::first()) {
            AboutPageModel::create([
                'what_services_like_title' => 'What are your services like?',
            ]);
        }
        $this->form->fill(AboutPageModel::first()->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Label')
        ->tabs([
            Tabs\Tab::make('Services Section (1)')
                ->schema([
                    TextInput::make('what_services_like_title')
                    ->label('Heading')
                    ->required(),
                    RichEditor::make('what_services_like')
                    ->label('Content')
                    ->required()
                ])
                ->icon('heroicon-m-newspaper'),
            Tabs\Tab::make('Leadership Section (2)')
                ->schema([
                    Toggle::make('show_pastors')
                    ->label('Show the leaders section?'),
                    TextInput::make('who_pastors_title')
                    ->label('Leader Section Heading'),
                    Placeholder::make('leaders_info')
                    ->content('If you show this section, the about page will show the leaders from the Leaders tab.')
                    ->label('How this works...')
                ])
                ->icon('heroicon-m-user-group'),
            Tabs\Tab::make('Church Section (3)')
                ->schema([
                    TextInput::make('what_church_like_title')
                    ->label('Heading')
                    ->required(),
                    RichEditor::make('what_church_like')
                    ->label('Content')
                    ->required()
                ])
                ->icon('heroicon-m-building-library'),
            Tabs\Tab::make('Other Section (4)')
                ->schema([
                    TextInput::make('other_info_title')
                    ->label('Heading')
                    ->required(),
                    RichEditor::make('other_info')
                    ->label('Content')
                    ->required()
                ])
                ->icon('heroicon-m-information-circle'),
            ])     
            ])
            ->statePath('data');
    } 

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
 
            AboutPageModel::first()->update($data);

        } catch (Halt $exception) {
            return;
        }

        Notification::make() 
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send(); 
    }



}
