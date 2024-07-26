<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class OverduePayList extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.overdue-pay-list';

    protected static ?string $title = 'Yuran Tertunggak';

    public static function getNavigationLabel(): string
{
    return __('Yuran Tertunggak');
}

public function getHeading(): string
{
    return __('Yuran Tertunggak');
}

public static function canAccess(): bool
{
    return auth()->user()->can('view_any_overdue::fee');
}

}
