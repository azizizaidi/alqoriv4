<?php
 
namespace App\Livewire;
 
use Filament\Notifications\Notification;
use Livewire\Component;
 
class Notifications extends Component
{
    public function save(): void
    {
        // ...
 
        Notification::make()
            ->title('Berjaya Buat Pembayaran')
            ->icon('heroicon-o-document-text')
            ->iconColor('success')
            ->success()
            ->duration(5000)
            ->send();
    }
}