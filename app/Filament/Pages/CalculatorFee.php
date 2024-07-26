<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class CalculatorFee extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-calculator';

    protected static string $view = 'filament.pages.calculator-fee';

    public static function table(Table $table): Table
    {
        return $table
    
            ->emptyStateIcon('heroicon-o-bookmark');
    
    }
    
    public static function getNavigationLabel(): string
    {
        return __('Kalkulator Yuran Kelas');
    }
    
    public function getHeading(): string
    {
        return __('Kalkulator Yuran Kelas');
    }

    public static function canAccess(): bool
{
    return auth()->user()->can('view_any_calculator_fee');
}
}
