<?php

namespace App\Filament\Resources\CekTiketResource\Pages;

use App\Filament\Resources\CekTiketResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCekTikets extends ListRecords
{
    protected static string $resource = CekTiketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
