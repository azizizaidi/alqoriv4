<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AssignClassTeacherResource\Pages;
use App\Filament\Resources\AssignClassTeacherResource\RelationManagers;
use App\Models\AssignClassTeacher;
use App\Models\User;
use App\Models\ClassName;
use App\Models\ClassPackage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\Select;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;

class AssignClassTeacherResource extends Resource
{
    protected static ?string $model = AssignClassTeacher::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('teacher_id')
                    ->label('Guru')
                    ->options(function (Get $get) {
                        $options = User::whereRelation('roles','id', 'like', '%'.'2'.'%')
                                    ->pluck('name', 'id');

                       // dd($options); // Dump and die to debug the options

                        return $options;
                    })
                    ->searchable(),
                 Select::make('registrar_id')
                    ->label('Klien')
                    ->options(function (Get $get) {
                        $options = User::whereRelation('roles','id', 'like', '%'.'4'.'%')
                                    ->pluck('name', 'id');

                       // dd($options); // Dump and die to debug the options

                        return $options;
                    })
                    ->searchable(),

                    TextInput::make('assign_class_code')
                    ->label('Kod Kelas'),

                    Select::make('class_name_id')
                    ->label('Nama Kelas')
                    ->multiple()
                    ->options(function (Get $get) {
                        $options = ClassName::pluck('name', 'id');

                       // dd($options); // Dump and die to debug the options

                        return $options;
                    })
                    ->searchable(),

                    Select::make('class_package_id')
                    ->label('Pakej Kelas')
                    ->options(function (Get $get) {
                        $options = ClassPackage::pluck('name', 'id');

                       // dd($options); // Dump and die to debug the options

                        return $options;
                    })
                    ->searchable(),
   


                  
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
                ->label('Nama Klien'),
                TextColumn::make('assign_class_code')
                ->label('Kod Kelas'),
                TextColumn::make('classes.name')
                ->badge()
                ->label('Nama Kelas'),
                TextColumn::make('classpackage.name')
                ->label('Pakej Kelas'),


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


  //  protected function handleRecordSave($record, array $data): void
  //  {
  //      $record->save();

  //      $record->classes()->sync($data['class_name_id']);
   //     $record->classpackage()->sync($data['class_package_id']);
   // }
}
