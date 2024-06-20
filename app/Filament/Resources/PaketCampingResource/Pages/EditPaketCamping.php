<?php

namespace App\Filament\Resources\PaketCampingResource\Pages;

use App\Filament\Resources\PaketCampingResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPaketCamping extends EditRecord
{
    protected static string $resource = PaketCampingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
