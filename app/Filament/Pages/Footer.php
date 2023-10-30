<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Form;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Actions\Action;
use Filament\Notifications\Notification;

## Models
use App\Models\SiteGlobal;

## Form Fields
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;


class Footer extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static string $view = 'filament.pages.footer';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'Setup';

    public ?array $data = [];

    public function mount(): void 
    {
        if (!SiteGlobal::first()) {
            SiteGlobal::create([
                'heading' => 'Find hope, purpose, and fellowship at BBC.',
            ]);
        }
        $this->form->fill(SiteGlobal::first()->attributesToArray());
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Tabs::make('Label')
        ->tabs([
            Tabs\Tab::make('Overview')
                ->schema([
                    RichEditor::make('footer_about')
                    ->required(),
                ])
                ->icon('heroicon-m-question-mark-circle'),
            Tabs\Tab::make('Schedule')
                ->schema([
                    RichEditor::make('footer_schedule')
                    ->required(),
                ])
                ->icon('heroicon-m-calendar-days'),
            Tabs\Tab::make('Contact Information')
                ->schema([
                    TextInput::make('church_phone'),
                    TextInput::make('church_email'),
                    TextInput::make('church_address'),
                    TextInput::make('church_url'),
                ])
                ->icon('heroicon-m-identification'),
            Tabs\Tab::make('Useful Links')
                ->schema([
            Repeater::make('useful_links')
                ->schema([
                    TextInput::make('text')
                    ->helperText('Facebook link')
                    ->required(),
                    TextInput::make('URL')
                    ->helperText('https://www...')
                    ->required(),
                ])
                ->columns(2),
                ])
                ->icon('heroicon-m-link'),
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
 
            SiteGlobal::first()->update($data);

        } catch (Halt $exception) {
            return;
        }

        Notification::make() 
            ->success()
            ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
            ->send(); 
    }

}
