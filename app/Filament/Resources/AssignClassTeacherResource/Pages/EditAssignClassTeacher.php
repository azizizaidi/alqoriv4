<?php

namespace App\Filament\Resources\AssignClassTeacherResource\Pages;

use App\Filament\Resources\AssignClassTeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAssignClassTeacher extends EditRecord
{
    protected static string $resource = AssignClassTeacherResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
