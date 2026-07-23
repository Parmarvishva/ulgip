<?php

namespace App\Filament\Resources\CyberAlertResource\Pages;

use App\Filament\Resources\CyberAlertResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCyberAlert extends EditRecord
{
    protected static string $resource = CyberAlertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
