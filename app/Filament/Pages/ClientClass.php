<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class ClientClass extends Page
{
    protected static ?string $navigationIcon = 'mdi-google-classroom';

    protected static string $view = 'filament.pages.teacher-class';

    public static function table(Table $table): Table
    {
        return $table
    
            ->emptyStateIcon('heroicon-o-bookmark');
    
    }
    
    public static function getNavigationLabel(): string
    {
        return __('Guru Kelas');
    }
    
    public function getHeading(): string
    {
        return __('Guru Kelas');
    }

    public static function canAccess(): bool
    {
        return auth()->user()->can('view_teacher_class');
    }
}