<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssignClassTeacherResource\Pages;
use App\Filament\Resources\AssignClassTeacherResource\RelationManagers;
use App\Models\AssignClassTeacher;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;

class AssignClassTeacherResource extends Resource
{
    protected static ?string $model = AssignClassTeacher::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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
                TextColumn::make('teacher.name')
                ->label('Nama Guru'),
                TextColumn::make('registrar.name')
                ->label('Nama Pendaftar'),
                TextColumn::make('assign_class_code')
                ->label('Kod Kelas'),


            ])
            ->filters([
                //
            ])
            ->actions([
               // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\UsersRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAssignClassTeachers::route('/'),
            'create' => Pages\CreateAssignClassTeacher::route('/create'),
            'edit' => Pages\EditAssignClassTeacher::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        $locale = app()->getLocale();

        if($locale == 'ms'){
            return "Penetapan Guru Pendaftar";
        }
        else
           return "Assign Class Teacher";
    }
}
