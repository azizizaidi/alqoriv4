<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use App\Models\AssignClassTeacher;
use Filament\Tables\Actions\Action;
use Filament\Tables\Table;
use App\Models\User;

class MyClients extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static string $view = 'filament.pages.my-clients';

    protected static ?string $title = 'Klien Saya';

    public static function table(Table $table): Table
{
    return $table
        ->emptyStateIcon('heroicon-o-bookmark');

}

public static function canAccess(): bool
{
    return auth()->user()->can('view_any_my_clients');
}


}
