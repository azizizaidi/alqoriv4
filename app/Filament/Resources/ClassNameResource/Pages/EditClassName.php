<?php

namespace App\Filament\Resources\ClassNameResource\Pages;

use App\Filament\Resources\ClassNameResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClassName extends EditRecord
{
    protected static string $resource = ClassNameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
