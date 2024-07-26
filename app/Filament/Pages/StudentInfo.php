<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class StudentInfo extends Page
{
    protected static ?string $navigationIcon = 'hugeicons-student-card';

    protected static string $view = 'filament.pages.student-info';

    public static function table(Table $table): Table
    {
        return $table
    
            ->emptyStateIcon('heroicon-o-bookmark');
    
    }
    
    public static function getNavigationLabel(): string
    {
        return __('Butiran Pelajar');
    }
    
    public function getHeading(): string
    {
        return __('Butiran Pelajar');
    }

    public static function canAccess(): bool
{
    return auth()->user()->can('view_any_student_info');
}
}
