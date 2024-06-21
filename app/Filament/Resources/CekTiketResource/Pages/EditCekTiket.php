<?php

namespace App\Filament\Resources\CekTiketResource\Pages;

use App\Filament\Resources\CekTiketResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCekTiket extends EditRecord
{
    protected static string $resource = CekTiketResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
