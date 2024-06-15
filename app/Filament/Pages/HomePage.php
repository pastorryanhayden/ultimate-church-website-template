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
use App\Models\SiteGlobal;

## Form Fields
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;



class HomePage extends Page implements HasForms
{
    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.home-page';

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
            Tabs\Tab::make('Main Header')
                ->schema([
                    TextInput::make('heading')
                    ->required(),
                FileUpload::make('header_image')
                ->image()
                ->disk('vultr')
                ->directory('images')
                ->visibility('public'),
                FileUpload::make('header_video')
                ->disk('vultr')
                    ->directory('images')
                    ->visibility('public')
                ->acceptedFileTypes([
                    'video/mp4',
                    'video/mpeg'
                ])
                ])
                ->icon('heroicon-m-newspaper'),
            Tabs\Tab::make('Action Buttons')
                ->schema([
                    Repeater::make('action_links')
                    ->maxItems(4)
                    ->schema([
                        TextInput::make('link_subtext')
                        ->helperText('i.e. "New to BBC?"')
                        ->required(),
                        TextInput::make('link_text')
                        ->helperText('i.e. "Learn More"')
                        ->required(),
                        TextInput::make('link_url')
                        ->helperText('i.e. "/about" - any URL will work')
                        ->required(),
                    ])
                    ->columns(3),
                ])
                ->icon('heroicon-m-bolt'),
            Tabs\Tab::make('Map')
                ->schema([
                    TextInput::make('map_url')
                    ->helperText(str('To get this: 1) Find your church on **[Google Maps](https://maps.google.com)**.  2) Click the share button and select "embed."  3) Copy the inside of the "scr" from the embeded script.  (It will be a long URL)')->inlineMarkdown()->toHtmlString()),
                ])
                ->icon('heroicon-m-map'),
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

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'Setup';

}
