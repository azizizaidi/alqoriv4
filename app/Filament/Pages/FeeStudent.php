<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;


class FeeStudent extends Page
{
    protected static ?string $navigationIcon = 'heroicon-s-newspaper';

    protected static string $view = 'filament.pages.fee-student';

    protected static ?string $title = 'Yuran Pelajar';


    public static function table(Table $table): Table
{
    return $table

        ->emptyStateIcon('heroicon-o-bookmark');

}

public static function getNavigationLabel(): string
{
    return __('Yuran Pelajar');
}

public function getHeading(): string
{
    return __('Yuran Pelajar');
}

public static function canAccess(): bool
{
    return auth()->user()->can('view_any_fee::student');
}

}
