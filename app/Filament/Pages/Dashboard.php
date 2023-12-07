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

class Dashboard extends \Filament\Pages\Dashboard implements HasForms
{

    use InteractsWithForms;

    protected static ?string $navigationIcon = 'heroicon-o-bookmark';

    protected static string $view = 'filament.pages.home-page';

    public function form(Form $form): Form
    {
        return $form;
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }
}