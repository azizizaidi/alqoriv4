<?php

namespace App\Livewire;

use App\Models\ReportClass;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Contracts\View\View;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\BulkActionGroup;
use Filament\Tables\Actions\DeleteBulkAction;
use Livewire\Component;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Blade;
use Filament\Tables\Columns\Summarizers\Count;
use Illuminate\Database\Query\Builder;

class OverduePayList extends Component

{

    public function render()
    {
        $reportclasses = ReportClass::selectRaw('GROUP_CONCAT(report_classes.id) as ids, report_classes.registrar_id, users.name as registrar_name, users.code as registrar_code')
            ->groupBy('report_classes.registrar_id')
            ->join('users', 'report_classes.registrar_id', '=', 'users.id')
            ->paginate(10); // You can specify the number of records per page

        // Add count for status where status != 0
        $reportclasses->transform(function ($item) {
            $statusCount = ReportClass::where('registrar_id', $item->registrar_id)
                ->where('status', '!=', 0)
                ->count();
            $item->status_count = $statusCount;
            return $item;
        });

        return view('livewire.overdue-pay-list')->with([
            'reportclasses' => $reportclasses,
        ]);
    }

}
