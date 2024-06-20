<?php

namespace App\Filament\Resources\AkunPenggunaResource\Pages;

use App\Filament\Resources\AkunPenggunaResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAkunPenggunas extends ListRecords
{
    protected static string $resource = AkunPenggunaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
