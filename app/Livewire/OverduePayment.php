<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ReportClass;
use Illuminate\Http\Request;

class OverduePayment extends Component
{


    public function render()
    {


        return view('livewire.overdue-payment')->with([
            'reportclasses' => ReportClass::get(),
        ]);

    }

}
