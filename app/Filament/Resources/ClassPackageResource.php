<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClassPackageResource\Pages;
use App\Filament\Resources\ClassPackageResource\RelationManagers;
use App\Models\ClassPackage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClassPackageResource extends Resource
{
    protected static ?string $model = ClassPackage::class;

    protected static ?string $navigationIcon = 'iconoir-packages';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name')
                ->label('Nama'),
                TextColumn::make('total_hour')
                ->label('Jumlah Jam'),

            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClassPackages::route('/'),
            'create' => Pages\CreateClassPackage::route('/create'),
            'edit' => Pages\EditClassPackage::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if($locale == 'ms'){
            return "Pakej Kelas";
        }
        else
           return "Class Package";
    }
}
