<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class RecordStudent extends Page
{
    protected static ?string $navigationIcon = 'heroicon-c-clipboard-document-list';

    protected static string $view = 'filament.pages.record-student';

    public static function table(Table $table): Table
    {
        return $table
    
            ->emptyStateIcon('heroicon-o-bookmark');
    
    }
    
    public static function getNavigationLabel(): string
    {
        return __('Prestasi Pelajar');
    }
    
    public function getHeading(): string
    {
        return __('Prestasi Pelajar');
    }

    public static function canAccess(): bool
{
    return auth()->user()->can('view_any_record_student');
}
}
