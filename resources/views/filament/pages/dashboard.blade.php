<x-filament-panels::page>
@livewire('overdue-payment')

@if(Auth::user()->roles->contains(2))
@livewire(\App\Filament\Widgets\StatsOverview::class)
@endif
@if(Auth::user()->roles->contains(4))
@livewire(\App\Filament\Widgets\ClientStats::class)
@endif
@livewire('chart-sale')

</x-filament-panels::page>
