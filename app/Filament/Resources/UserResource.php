<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use STS\FilamentImpersonate\Tables\Actions\Impersonate;
use Filament\Forms\Components\TextInput;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;
use Filament\Tables\Actions\BulkAction;
use Illuminate\Database\Eloquent\Collection;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-s-pencil-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
             TextInput::make('name')
             ->label('Nama'),
             TextInput::make('code')
             ->label('Kod Ahli'),
             TextInput::make('email')
             ->label('ID Log Masuk'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('id'),
                TextColumn::make('name')
                ->label('Nama')
                ->searchable(),
                TextColumn::make('code')
                ->label('Kod Ahli')
                ->searchable(isIndividual: true),
                TextColumn::make('roles.name')
                ->label('Peranan'),
                TextColumn::make('email')
                ->label('ID Log Masuk')
                ->searchable(isIndividual: true),
                TextColumn::make('created_at')
                ->label('Tarikh Didaftarkan'),
                TextColumn::make('deleted_at')
                ->label('Tarikh Dipadam'),
                
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
              
              //  Impersonate::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    ExportBulkAction::make(),
                    //Tables\Actions\DeleteBulkAction::make(),
                    BulkAction::make('delete')
                    ->requiresConfirmation()
                    ->action(fn (Collection $records) => $records->each->delete())
                    ->icon('heroicon-s-trash'),
                ]),

            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
           RelationManagers\RolesRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if($locale == 'ms'){
            return "Pengguna";
        }
        else
           return "User";
    }

    
}
