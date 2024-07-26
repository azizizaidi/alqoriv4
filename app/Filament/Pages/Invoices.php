<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;


class Invoices extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.invoices';

    protected static bool $shouldRegisterNavigation = false;

    public function getHeading(): string
{
    return __('Invois Yuran');
}



}
