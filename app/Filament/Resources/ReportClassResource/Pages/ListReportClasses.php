<?php

namespace App\Filament\Resources\ReportClassResource\Pages;

use App\Filament\Resources\ReportClassResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use pxlrbt\FilamentExcel\Columns\Column;
use pxlrbt\FilamentExcel\Exports\ExcelExport;
use pxlrbt\FilamentExcel\Actions\Pages\ExportAction;

class ListReportClasses extends ListRecords
{
    protected static string $resource = ReportClassResource::class;

    protected function getHeaderActions(): array
    {
        return [
           // Actions\CreateAction::make(),

            ExportAction::make() 
                ->exports([
                    ExcelExport::make()
                        ->fromTable()
                        ->withFilename(fn ($resource) => $resource::getModelLabel() . '-' . date('Y-m-d'))
                        ->withWriterType(\Maatwebsite\Excel\Excel::CSV)
                        //->withColumns([
                        //    Column::make('updated_at')
                        //    ->label('Tarikh Dikemaskini'),
                      //  ])
                ]), 
        ];
    }
}
