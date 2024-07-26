<?php

namespace App\Filament\Resources;

use App\Models\ClassName;
use Filament\Tables\Table;
use Miguilim\FilamentAutoPanel\AutoResource;
use Filament\Tables\Columns\TextColumn;

class ClassNameResource extends AutoResource
{
    protected static ?string $model = ClassName::class;

    protected static ?string $navigationIcon = 'heroicon-m-table-cells';

    protected static array $enumDictionary = [];

    protected static array $visibleColumns = [ ];

    protected static array $searchableColumns = [];

    public static function getFilters(): array
    {
        return [
            //
        ];
    }

    public static function getActions(): array
    {
        return [
            //
        ];
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getHeaderWidgets(): array
    {
        return [
            'list' => [
                //
            ],
            'view' => [
                //
            ],
        ];
    }

    public static function getFooterWidgets(): array
    {
        return [
            'list' => [
                //
            ],
            'view' => [
                //
            ],
        ];
    }

    public static function getColumnsOverwrite(): array
    {
        return [
            'table' => [
                TextColumn::make('name')
                ->label('Nama'),
                TextColumn::make('feeperhour')
                ->label('Yuran Per Jam'),
                TextColumn::make('allowanceperhour')
                ->label('Elaun Per Jam'),
                TextColumn::make('created_at')
                ->label('Tarikh Dibuat'),
                TextColumn::make('updated_at')
                ->label('Tarikh Dikemaskini'),
                TextColumn::make('deleted_at')
                ->label('Tarikh Dipadam'),

            ],
            'form' => [
                //
            ],
            'infolist' => [
                //
            ],
        ];
    }

    public static function getExtraPages(): array
    {
        return [
            //
        ];
    }

    public static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if($locale == 'ms'){
            return "Nama Kelas";
        }
        else
           return "Class Name";
    }
}
