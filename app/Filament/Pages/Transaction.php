<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Transaction extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-credit-card';

    protected static string $view = 'filament.pages.transaction';

    public static function table(Table $table): Table
    {
        return $table
    
            ->emptyStateIcon('heroicon-o-bookmark');
    
    }
    
    public static function getNavigationLabel(): string
    {
        return __('Rekod Transaksi');
    }
    
    public function getHeading(): string
    {
        return __('Rekod Transaksi');
    }

    public static function canAccess(): bool
{
    return auth()->user()->can('view_any_transaction');
}

}
