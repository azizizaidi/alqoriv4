<?php

namespace App\Filament\Resources\ReportClassResource\Pages;

use App\Filament\Resources\ReportClassResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReportClass extends EditRecord
{
    protected static string $resource = ReportClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
