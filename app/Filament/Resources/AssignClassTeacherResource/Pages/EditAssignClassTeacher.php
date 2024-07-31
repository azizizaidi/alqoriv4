<?php

namespace App\Filament\Resources\AssignClassTeacherResource\Pages;

use App\Filament\Resources\AssignClassTeacherResource;
use Filament\Actions;
use App\Models\AssignClassTeacher;
use App\Models\ReportClass;
use App\Models\ClassName;
use App\Models\ClassPackage;
use App\Models\User;
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

    protected function afterSave(): void
    {
        $assignClassTeacher = $this->record;

        $assignClassTeacher->classes()->sync($this->data['class_name_id'] ?? []);
        $assignClassTeacher->classpackage()->sync($this->data['class_package_id'] ?? []);

        $assignClassTeacher->save();
    }
}
