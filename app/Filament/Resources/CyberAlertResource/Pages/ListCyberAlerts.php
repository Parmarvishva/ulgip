<?php

namespace App\Filament\Resources\CyberAlertResource\Pages;

use App\Filament\Resources\CyberAlertResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCyberAlerts extends ListRecords
{
    protected static string $resource = CyberAlertResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
