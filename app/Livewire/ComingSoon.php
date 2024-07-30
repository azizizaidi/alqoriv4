<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\ReportClass;
use Illuminate\Http\Request;

class ComingSoon extends Component
{
   // public $name = 'Pengumuman';

    

    public function render()
    {
        return view('livewire.coming-soon');
    }

  //  public function mount() 
   // { 
   //     $this->middleware('permission:chart-sale'); 
 //   }
}
