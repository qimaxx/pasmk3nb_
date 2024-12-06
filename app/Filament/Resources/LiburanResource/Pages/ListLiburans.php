<?php

namespace App\Filament\Resources\LiburanResource\Pages;

use App\Filament\Resources\LiburanResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLiburans extends ListRecords
{
    protected static string $resource = LiburanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
