<?php

namespace App\Filament\Resources\ClassNameResource\Pages;

use App\Filament\Resources\ClassNameResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClassNames extends ListRecords
{
    protected static string $resource = ClassNameResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
