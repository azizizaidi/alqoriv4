<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Elaun Bulan 6/24', 'RM450')
               // ->description('32k increase')
               // ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success')
                ->extraAttributes([ 
                   // 'wire:click' => '$emit("filterUpdate", "is_admin")',
                    //'class' => 'cursor-pointer border-lime-400 ',
                ]), 


            Stat::make('Jumlah Klien Aktif', '5')
            ->extraAttributes([ 
                // 'wire:click' => '$emit("filterUpdate", "is_admin")',
                // 'class' => 'cursor-pointer border-rose-400',
             ]), 

              
            Stat::make('Jumlah Kelas Aktif', '7')
            ->extraAttributes([ 
                // 'wire:click' => '$emit("filterUpdate", "is_admin")',
               //  'class' => 'cursor-pointer border-teal-400',
             ]), 

              
        ];
    }


}
