<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class YourClass extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-table-cells';

    protected static string $view = 'filament.pages.your-class';

    public static function table(Table $table): Table
    {
        return $table
    
            ->emptyStateIcon('heroicon-o-bookmark');
    
    }
    
    public static function getNavigationLabel(): string
    {
        return __('Kelas');
    }
    
    public function getHeading(): string
    {
        return __('Kelas');
    }

    public static function canAccess(): bool
    {
        return auth()->user()->can('view_your_class');
    }
}
