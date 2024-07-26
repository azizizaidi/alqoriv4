<?php

namespace App\Livewire;

use Livewire\Component;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Filament\Notifications\Notification;

class Alert extends Component
{
    public $message;
    public $type;
    use LivewireAlert;

    public function save(): void
    {
        // ...
 
        Notification::make()
            ->title('Saved successfully')
            ->success()
            ->seconds(10)
            ->send();
    }
   

    public function mount()
    {
        $this->message = session('alert.message');
        $this->type = session('alert.type', 'success');
    }

    public function render()
    {
        return view('livewire.alert');
    }
}
