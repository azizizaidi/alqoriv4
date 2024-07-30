<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\ReportClass;
use Illuminate\Http\Request;

class ChartAllowance extends Component
{
    public $name = 'Revenue by month with Livewire';

    public $labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July'];

    public $dataPoint = [65, 59, 80, 81, 56, 55, 40];

    public function render()
    {
        return view('livewire.chart-allowance')->with([
            'reportclasses' => ReportClass::get(),
        ]);
    }

  //  public function mount() 
   // { 
   //     $this->middleware('permission:chart-sale'); 
 //   }
}
