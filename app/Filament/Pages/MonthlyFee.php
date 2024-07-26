<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;



class MonthlyFee extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static string $view = 'filament.pages.monthly-fee';

    protected static ?string $title = 'Yuran Bulanan';


    public static function table(Table $table): Table
{
    return $table

        ->emptyStateIcon('heroicon-o-bookmark');

}

public static function getNavigationLabel(): string
{
    return __('Yuran Bulanan');
}

public function getHeading(): string
{
    return __('Yuran Bulanan');
}

public static function canAccess(): bool
{
    return auth()->user()->can('view_monthly_fee');
}

}
