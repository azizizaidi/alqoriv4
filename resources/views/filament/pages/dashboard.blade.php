<x-filament-panels::page>


@if(Auth::user()->roles->contains(2))
@livewire(\App\Filament\Widgets\StatsOverview::class)
@endif
@if(Auth::user()->roles->contains(4))
@livewire(\App\Filament\Widgets\ClientStats::class)
@endif
@if(Auth::user()->roles->contains(1))
@livewire(\App\Filament\Widgets\AdminStats::class)
@livewire('overdue-payment')
@endif
@livewire('chart-sale')

</x-filament-panels::page>
