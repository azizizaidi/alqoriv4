<?php

namespace App\Filament\Resources\AssignClassTeacherResource\Pages;

use App\Filament\Resources\AssignClassTeacherResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\AssignClassTeacher;
use App\Models\ReportClass;
use App\Models\ClassName;
use App\Models\ClassPackage;

class CreateAssignClassTeacher extends CreateRecord
{
    protected static string $resource = AssignClassTeacherResource::class;

    protected function afterCreate(): void
    {
        $assignClassTeacher = $this->record;

        $assignClassTeacher->classes()->sync($this->data['class_name_id'] ?? []);
        $assignClassTeacher->classpackage()->sync($this->data['class_package_id'] ?? []);

        $assignClassTeacher->save();
    }
}
