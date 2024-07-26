<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ReportClass;
use Illuminate\Http\Request;

class InvoiceView extends Component
{
   // public function render()
   // {
  //      return view('livewire.invoice-view');
   // }
   // public ReportClass $report;
    public $record;
   
    public function mount(Request $request)
    {
        // Retrieve the $record using the 'id' query parameter from the URL
       // if()
        $registrar_id =auth()->id();
        $recordId = $request->query('id'); //->where('registrar_id', $registrar_id);
        $this->record = ReportClass::find($recordId);
       return dd($recordId,$this->record);

        // Handle the case where the record is not found, if needed


    }

    public function render()
    {


        return view('livewire.invoice-view')->with([
            'value' => $this->record,
        ]);

       // $report = $this->record;
      //  return view('livewire.invoice-view',compact(['report' , $report]));

    }

}
