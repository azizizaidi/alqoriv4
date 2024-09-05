<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use App\Models\User;
use App\Models\ReportClass;


class Allowance extends Page
{
    protected static ?string $navigationIcon = 'heroicon-m-currency-dollar';

    protected static string $view = 'filament.pages.allowance';

    protected static ?string $title = 'Elaun Guru';


    public static function table(Table $table): Table
{
    return $table
        ->emptyStateIcon('heroicon-o-bookmark');

}

//public static function viewAny(Model $record): bool
//{
  //  if(auth()->user()->can('view_any_allowance::report'))
   // return true;
// else
  // return false;//
//}

public static function getNavigationLabel(): string
{
    return __('Elaun Guru');
}

public function getHeading(): string
{
    return __('Elaun Guru');
}

public static function canAccess(): bool
{
    return auth()->user()->can('view_any_allowance::report');
}


}
