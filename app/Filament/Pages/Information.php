<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Livewire\Livewire;

class Information extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.pages.information';

    public static function getNavigationLabel(): string
    {
        return __('Info');
    }

    public static function getNavigationBadge(): ?string
    {
        return (string) static::getBadgeCount();
    }

    public static function getBadgeCount(): ?int
    {
        // Here you should retrieve the badge count, for example from a cache or a database
        return 1; // Example static count
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public function getHeading(): string
    {
        return __('Info');
    }
}
