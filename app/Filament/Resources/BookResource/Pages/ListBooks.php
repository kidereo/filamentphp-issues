<?php

namespace App\Filament\Resources\BookResource\Pages;

use App\Filament\Resources\BookResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Enums\ActionSize;

class ListBooks extends ListRecords
{
    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),

            Actions\Action::make('import_users')
                ->label('Import from CSV')
                ->icon('heroicon-o-table-cells')
                ->outlined()
                ->size(ActionSize::Small)
                ->color('primary-blue'), //Custom color registered in AppServiceProvider.php
        ];
    }
}
