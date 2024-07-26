<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FeeRateResource\Pages;
use App\Filament\Resources\FeeRateResource\RelationManagers;
use App\Models\FeeRate;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use App\Models\ClassName;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Get;
use Filament\Actions\CreateAction;

class FeeRateResource extends Resource
{
    protected static ?string $model = FeeRate::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static bool $shouldRegisterNavigation = false;

    public static function form(Form $form): Form
    {

     //   CreateAction::make()
       //   ->successRedirectUrl(route('fee-rates.list'));
        return $form
            ->schema([
                Select::make('class_names_id')
                ->label('Nama Kelas')
                ->options(function (Get $get) {
                    $d= ClassName::get()
                        ->pluck('name', 'id')
                        ->toArray();

                        return $d;
                })
             //   ->searchable()
                ->preload()

                ->searchable(),
                TextInput::make('total_hours_min')
                ->numeric(),
                TextInput::make('total_hours_max')
                ->numeric(),
                TextInput::make('feeperhour')
                //->numeric()
                ->prefix('RM')
                ->currencyMask(thousandSeparator: ',',decimalSeparator: '.',precision: 2)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('class.name')
                ->label('Nama Kelas'),
                TextColumn::make('total_hours_min')
                ->label('Minima Jam'),
                TextColumn::make('total_hours_max')
                ->label('Maksima Jam'),
                TextColumn::make('feeperhour')
                ->label('Yuran Per Jam')
                ->currency('MYR'),
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
            'index' => Pages\ListFeeRates::route('/'),
            'create' => Pages\CreateFeeRate::route('/create'),
            'edit' => Pages\EditFeeRate::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if($locale == 'ms'){
            return "Tetapan Yuran";
        }
        else
           return "Fee Rate";
    }


}

