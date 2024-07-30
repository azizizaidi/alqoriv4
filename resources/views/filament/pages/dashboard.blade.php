<x-filament-panels::page>


@if(Auth::user()->roles->contains(2))
@livewire(\App\Filament\Widgets\StatsOverview::class)
@livewire('chart-allowance')
@endif
@if(Auth::user()->roles->contains(4))
@livewire(\App\Filament\Widgets\ClientStats::class)
@livewire('memo')

@endif
@if(Auth::user()->roles->contains(1))
@livewire(\App\Filament\Widgets\AdminStats::class)
@livewire('overdue-payment')
@livewire('chart-sale')
@endif


</x-filament-panels::page>
