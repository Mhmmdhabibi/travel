<?php

namespace App\Filament\Resources\PaketCampingResource\Pages;

use App\Filament\Resources\PaketCampingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPaketCampings extends ListRecords
{
    protected static string $resource = PaketCampingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
