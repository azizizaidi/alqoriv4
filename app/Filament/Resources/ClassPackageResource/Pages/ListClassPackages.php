<?php

namespace App\Filament\Resources\ClassPackageResource\Pages;

use App\Filament\Resources\ClassPackageResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClassPackages extends ListRecords
{
    protected static string $resource = ClassPackageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
