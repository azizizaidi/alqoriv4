<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\ReportClass;
use Illuminate\Http\Request;

class Memo extends Component
{
    public $name = 'Pengumuman';

    

    public function render()
    {
        return view('livewire.memo')->with([
            'reportclasses' => ReportClass::get(),
        ]);
    }

  //  public function mount() 
   // { 
   //     $this->middleware('permission:chart-sale'); 
 //   }
}
