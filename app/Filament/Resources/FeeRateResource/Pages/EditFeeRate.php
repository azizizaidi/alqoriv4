<?php

namespace App\Filament\Resources\FeeRateResource\Pages;

use App\Filament\Resources\FeeRateResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFeeRate extends EditRecord
{
    protected static string $resource = FeeRateResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
