<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class AddClass extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-table-cells';

    protected static string $view = 'filament.pages.add-class';

    public static function table(Table $table): Table
    {
        return $table
    
            ->emptyStateIcon('heroicon-o-bookmark');
    
    }
    
    public static function getNavigationLabel(): string
    {
        return __('Tambah Kelas');
    }
    
    public function getHeading(): string
    {
        return __('Tambah Kelas');
    }

    public static function canAccess(): bool
    {
        return auth()->user()->can('view_any_add_class');
    }

    
}
