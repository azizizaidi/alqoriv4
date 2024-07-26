<?php

namespace App\Filament\Resources\ClassPackageResource\Pages;

use App\Filament\Resources\ClassPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditClassPackage extends EditRecord
{
    protected static string $resource = ClassPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
