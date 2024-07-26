<?php

namespace App\Filament\Resources\AssignClassTeacherResource\Pages;

use App\Filament\Resources\AssignClassTeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAssignClassTeachers extends ListRecords
{
    protected static string $resource = AssignClassTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
