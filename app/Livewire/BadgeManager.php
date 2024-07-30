<?php

namespace App\Http\Livewire;

use Livewire\Component;

class BadgeManager extends Component
{
    public $badgeCount = 1;

    protected $listeners = ['removeBadge' => 'removeBadge'];

    public function removeBadge()
    {
        $this->badgeCount = null;
    }

    public function render()
    {
        return view('livewire.badge-manager');
    }
}
