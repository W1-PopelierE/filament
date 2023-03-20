<?php

namespace App\Http\Livewire;

use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\Select;
use Livewire\Component;

class Actions extends Component implements HasActions
{
    use InteractsWithActions;

    public function buttonAction(): Action
    {
        return Action::make('buttonAction')
            ->label('Edit')
            ->button();
    }

    public function linkAction(): Action
    {
        return Action::make('linkAction')
            ->label('Edit')
            ->link();
    }

    public function iconButtonAction(): Action
    {
        return Action::make('iconButtonAction')
            ->icon('heroicon-o-pencil-square')
            ->iconButton();
    }

    public function dangerAction(): Action
    {
        return Action::make('dangerAction')
            ->label('Delete')
            ->color('danger');
    }

    public function largeAction(): Action
    {
        return Action::make('largeAction')
            ->label('Create')
            ->size('lg');
    }

    public function iconAction(): Action
    {
        return Action::make('iconAction')
            ->label('Edit')
            ->icon('heroicon-m-pencil-square');
    }

    public function iconAfterAction(): Action
    {
        return Action::make('iconAfterAction')
            ->label('Edit')
            ->icon('heroicon-m-pencil-square')
            ->iconPosition('after');
    }

    public function confirmationModalAction(): Action
    {
        return Action::make('confirmationModalAction')
            ->label('Delete')
            ->color('danger')
            ->requiresConfirmation()
            ->action(fn () => null);
    }

    public function confirmationModalCustomTextAction(): Action
    {
        return Action::make('confirmationModalCustomTextAction')
            ->label('Delete')
            ->color('danger')
            ->requiresConfirmation()
            ->modalHeading('Delete post')
            ->modalSubheading('Are you sure you\'d like to delete this post? This cannot be undone.')
            ->modalButton('Yes, delete it')
            ->action(fn () => null);
    }

    public function modalFormAction(): Action
    {
        return Action::make('modalFormAction')
            ->label('Update author')
            ->form([
                Select::make('authorId')
                    ->label('Author')
                    ->required(),
            ])
            ->action(fn () => null);
    }

    public function slideOverAction(): Action
    {
        return Action::make('slideOverAction')
            ->label('Update author')
            ->form([
                Select::make('authorId')
                    ->label('Author')
                    ->required(),
            ])
            ->slideOver()
            ->action(fn () => null);
    }

    public function render()
    {
        return view('livewire.actions');
    }
}