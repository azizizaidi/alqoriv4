<?php

namespace App\Filament\Resources\FeeRateResource\Pages;

use App\Filament\Resources\FeeRateResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListFeeRates extends ListRecords
{
    protected static string $resource = FeeRateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
