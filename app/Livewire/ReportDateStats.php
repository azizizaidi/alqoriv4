<?php

namespace App\Livewire;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\ReportClass;
use Carbon\Carbon;

class ReportDateStats extends BaseWidget
{
    protected function getStats(): array
    {
        // Sum the allowance_amount for the specified month
        $earlyAllowance = ReportClass::where('month', '11-2024')
            ->where('created_at', '<', Carbon::create(2024, 12, 1))
            ->sum('allowance');

        $lateAllowance = ReportClass::where('month', '11-2024')
            ->where('created_at', '>=', Carbon::create(2024, 12, 1))
            ->sum('allowance');

        return [
            Stat::make('Jumlah Elaun Hantar Sebelum 1/12/24', 'RM' . number_format($earlyAllowance, 2))
                ->color('success')
                ->extraAttributes([
                    // Add attributes if needed
                ]),
            Stat::make('Jumlah Elaun Hantar Lambat', 'RM' . number_format($lateAllowance, 2))
                ->extraAttributes([
                    // Add attributes if needed
                ]),
        ];
    }
}
