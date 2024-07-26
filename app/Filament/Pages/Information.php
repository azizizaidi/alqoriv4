<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Information extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.information';

    public static function table(Table $table): Table
    {
        return $table
    
            ->emptyStateIcon('heroicon-o-bookmark');
    
    }
    
    public static function getNavigationLabel(): string
    {
        return __('Info');
    }
    
    public function getHeading(): string
    {
        return __('Info');
    }
}
