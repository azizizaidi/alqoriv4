<?php

namespace App\Filament\Resources\ReportClassResource\Pages;

use App\Filament\Resources\ReportClassResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Models\AssignClassTeacher;
use App\Models\ReportClass;
use App\Models\ClassName;
use Illuminate\Support\Facades\Auth;

class CreateReportClass extends CreateRecord
{
    protected static string $resource = ReportClassResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {


        // Check if the 'date' key exists in the form data
     //   if (isset($data['date']) && is_array($data['date'])) {
            // Convert the array of dates to a single string
      //      $datesAsString = implode(', ', $data['date']);

            // Update the 'date' field in the form data
      //      $data['date'] = $datesAsString;
    //    }

     //   if (isset($data['date_2']) && is_array($data['date_2'])) {
            // Convert the array of dates to a single string
    //        $datesAsString = implode(', ', $data['date_2']);

            // Update the 'date' field in the form data
    //        $data['date_2'] = $datesAsString;
    //    }

        //auto create month field

        if (!isset($data['month'])) {
            // Calculate the 'month' based on the current date
            $now = now();
            if ($now->day < 25) {
                $data['month'] = $now->subMonth()->format('m-Y');
            } else {
                $data['month'] = $now->format('m-Y');
            }

        }




        // Return the updated form data
        return $data;
    }

    protected function beforeFill(): void
    {
        // Runs before the form fields are populated with their default values.
    }

    protected function afterFill(): void
    {
        // Runs after the form fields are populated with their default values.
    }

    protected function beforeValidate(): void
    {
        // Runs before the form fields are validated when the form is submitted.
    }

    protected function afterValidate(): void
    {
        // Runs after the form fields are validated when the form is submitted.
    }

    protected function beforeCreate(): void
    {
        // Runs before the form fields are saved to the database.
    }

    protected function afterCreate(): void

    
    {

        //update registrar_id from false registrar_id
        $reportClass  = ReportClass::where('created_by_id', Auth::user()->id)->latest()->first();
        $assignClassTeacher = AssignClassTeacher::find( $reportClass ->registrar_id);

        $classname = ClassName::find( $reportClass ->class_names_id);
        $classname_2 = ClassName::find($reportClass->class_names_id_2);




        if ($assignClassTeacher) {
            $registrarName = $assignClassTeacher->registrar->id;
            $reportClass ->registrar_id = $registrarName;
            $reportClass ->status = 0;




        //create fee student and allowance
        $finalhour = $reportClass->total_hour + ($reportClass->total_hour_2 ?? 0); // Calculate finalhour

        if($reportClass->total_hour_2 == null){

            $reportClass->allowance = $reportClass->total_hour * $classname->allowanceperhour;
            if($classname->name == "Al-Quran Online AQ"){
                if($finalhour <= 7.9){
                    $reportClass->fee_student = 35 * $reportClass->total_hour;
                }elseif($finalhour <= 11.9){
                    $reportClass->fee_student = 30 * $reportClass->total_hour;
                }elseif($finalhour >= 12){
                    $reportClass->fee_student = 25 * $reportClass->total_hour;
                }

            }elseif($classname->name == "Fardhu Ain Online AQ"){
                if($finalhour <= 7.9){
                    $reportClass->fee_student = 40 * $reportClass->total_hour;
                }elseif($finalhour <= 11.9){
                    $reportClass->fee_student = 35 * $reportClass->total_hour;
                }elseif($finalhour >= 12){
                    $reportClass->fee_student = 30 * $reportClass->total_hour;
                }

            }elseif($classname->name == "Al-Quran Fizikal AQ"){
                if($finalhour <= 7.9){
                    $reportClass->fee_student = 50 * $reportClass->total_hour;
                }elseif($finalhour <= 11.9){
                    $reportClass->fee_student = 45 * $reportClass->total_hour;
                }elseif($finalhour >= 12){
                    $reportClass->fee_student = 40 * $reportClass->total_hour;
                }

            }elseif($classname->name == "Fardhu Ain Fizikal AQ"){
                if($finalhour <= 7.9){
                    $reportClass->fee_student = 60 * $reportClass->total_hour;
                }elseif($finalhour <= 11.9){
                    $reportClass->fee_student = 55 * $reportClass->total_hour;
                }elseif($finalhour >= 12){
                    $reportClass->fee_student = 50 * $reportClass->total_hour;
                }


        }elseif($classname->name == "Al-Quran Fizikal DQ"){
            if($finalhour <= 4.9){
                $reportClass->fee_student = 60 * $reportClass->total_hour;
            }elseif($finalhour <= 8.9){
                $reportClass->fee_student = 55 * $reportClass->total_hour;
            }elseif($finalhour >= 9){
                $reportClass->fee_student = 50 * $reportClass->total_hour;
            }

       }elseif($classname->name == "Fardhu Ain Fizikal DQ"){
        if($finalhour <= 4.9){
            $reportClass->fee_student = 70 * $reportClass->total_hour;
        }elseif($finalhour <= 8.9){
            $reportClass->fee_student = 65 * $reportClass->total_hour;
        }elseif($finalhour >= 9){
            $reportClass->fee_student = 60 * $reportClass->total_hour;
        }

       }else{
        $reportClass->fee_student = $reportClass->class_name->feeperhour * $reportClass->total_hour;
       }
        
        
    //    elseif($classname->name == "Al-Quran Online BQ"){
    //        $reportClass->fee_student = 35 * $reportClass->total_hour;
    //    }elseif($classname->name == "Al-Quran Online CQ"){
    //        $reportClass->fee_student = 40 * $reportClass->total_hour;
   //     }elseif($classname->name == "Fardhu Ain Online BQ"){
   //         $reportClass->fee_student = 40 * $reportClass->total_hour;
   //     }elseif($classname->name == "Al-Quran Fizikal BQ"){
   //         $reportClass->fee_student = 50 * $reportClass->total_hour;
   //     }elseif($classname->name == "Fardhu Ain Fizikal BQ"){
   //         $reportClass->fee_student = 60 * $reportClass->total_hour;
   //     }elseif($classname->name == "Fardhu Ain Online DQ"){
  //          $reportClass->fee_student = 45 * $reportClass->total_hour;
  //      }elseif($classname->name == "Al-Quran Fizikal DQ"){
   //         $reportClass->fee_student = 60 * $reportClass->total_hour;
  //      }elseif($classname->name == "Fardhu Ain Fizikal DQ"){
 //           $reportClass->fee_student = 70 * $reportClass->total_hour;
  ///      }

       // $reportClass->save();
        //dd($reportClass);
        }

        else{

             // $classname_2 = ClassName::find($reportClass->class_name_2->id = $reportClass->class_names_id_2);


            $reportClass->allowance = ($reportClass->total_hour * $classname->allowanceperhour)
            +($reportClass->total_hour_2 * $classname_2->allowanceperhour);

            if($classname->name == "Al-Quran Online AQ"){
                if($reportClass->total_hour <= 7.9){
                    $reportClass->fee_student = 35 * $reportClass->total_hour;
                }elseif($reportClass->total_hour <= 11.9){
                    $reportClass->fee_student = 30 * $reportClass->total_hour;
                }elseif($reportClass->total_hour >= 12){
                    $reportClass->fee_student = 25 * $reportClass->total_hour;
                }

            }elseif($classname->name == "Fardhu Ain Online AQ"){
                if($reportClass->total_hour <= 7.9){
                    $reportClass->fee_student = 40 * $reportClass->total_hour;
                }elseif($reportClass->total_hour <=11.9){
                    $reportClass->fee_student = 35 * $reportClass->total_hour;
                }elseif($reportClass->total_hour >= 12){
                    $reportClass->fee_student = 30 * $reportClass->total_hour;
                }

            }elseif($classname->name == "Al-Quran Fizikal AQ"){
                if($reportClass->total_hour <= 7.9){
                    $reportClass->fee_student = 50 * $reportClass->total_hour;
                }elseif($reportClass->total_hour <= 11.9){
                    $reportClass->fee_student = 45 * $reportClass->total_hour;
                }elseif($reportClass->total_hour >= 12){
                    $reportClass->fee_student = 40 * $reportClass->total_hour;
                }

            }elseif($classname->name == "Fardhu Ain Fizikal AQ"){
                if($reportClass->total_hour <= 7.9){
                    $reportClass->fee_student = 60 * $reportClass->total_hour;
                }elseif($reportClass->total_hour <= 11.9){
                    $reportClass->fee_student = 55 * $reportClass->total_hour;
                }elseif($reportClass->total_hour >= 12){
                    $reportClass->fee_student = 50 * $reportClass->total_hour;
                }

            }elseif($classname->name == "Al-Quran Fizikal DQ"){
                if($finalhour <= 4.9){
                    $reportClass->fee_student = 60 * $reportClass->total_hour;
                }elseif($finalhour <= 8.9){
                    $reportClass->fee_student = 55 * $reportClass->total_hour;
                }elseif($finalhour >= 9){
                    $reportClass->fee_student = 50 * $reportClass->total_hour;
                }
    
           }elseif($classname->name == "Fardhu Ain Fizikal DQ"){
            if($finalhour <= 4.9){
                $reportClass->fee_student = 70 * $reportClass->total_hour;
            }elseif($finalhour <= 8.9){
                $reportClass->fee_student = 65 * $reportClass->total_hour;
            }elseif($finalhour >= 9){
                $reportClass->fee_student = 60 * $reportClass->total_hour;
            }
    
           }else{
            $reportClass->fee_student = $classname->feeperhour * $reportClass->total_hour;
           }
            
         

            //----------------------------------------------
            $feestudent = $reportClass->fee_student;
            if($classname_2->name == "Al-Quran Online AQ"){
                if($finalhour <= 7.9){
                    $reportClass->fee_student = $feestudent + (35 * $reportClass->total_hour_2);
                }elseif($finalhour <= 11.9){
                    $reportClass->fee_student = $feestudent + (30 * $reportClass->total_hour_2);
                }elseif($finalhour >= 12){
                    $reportClass->fee_student = $feestudent + (25 * $reportClass->total_hour_2);
                }

            }elseif($classname_2->name == "Fardhu Ain Online AQ"){
                if($finalhour <= 7.9){
                    $reportClass->fee_student = $feestudent + (40 * $reportClass->total_hour_2);
                }elseif($finalhour <= 11.9){
                    $reportClass->fee_student = $feestudent + (35 * $reportClass->total_hour_2);
                }elseif($finalhour >= 12){
                    $reportClass->fee_student = $feestudent + (30 * $reportClass->total_hour_2);
                }

            }elseif($classname_2->name == "Al-Quran Fizikal AQ"){
                if($finalhour <= 7.9){
                    $reportClass->fee_student = $feestudent + (50 * $reportClass->total_hour_2);
                }elseif($finalhour <= 11.9){
                    $reportClass->fee_student = $feestudent + (45 * $reportClass->total_hour_2);
                }elseif($finalhour >= 12){
                    $reportClass->fee_student = $feestudent + (40 * $reportClass->total_hour_2);
                }

            }elseif($classname_2->name == "Fardhu Ain Fizikal AQ"){
                if($finalhour <= 7.9){
                    $reportClass->fee_student = $feestudent + (60 * $reportClass->total_hour_2);
                }elseif($finalhour <= 11.9){
                    $reportClass->fee_student = $feestudent + (55 * $reportClass->total_hour_2);
                }elseif($finalhour >= 12){
                    $reportClass->fee_student = $feestudent + (50 * $reportClass->total_hour_2);
                }

            }elseif($classname_2->name == "Al-Quran Fizikal DQ"){
                if($finalhour <= 4.9){
                    $reportClass->fee_student = $feestudent + (50 * $reportClass->total_hour_2);
                }elseif($finalhour <= 8.9){
                    $reportClass->fee_student = $feestudent + (45 * $reportClass->total_hour_2);
                }elseif($finalhour >= 9){
                    $reportClass->fee_student = $feestudent + (40 * $reportClass->total_hour_2);
                }

            }elseif($classname_2->name == "Fardhu Ain Fizikal DQ"){
                if($finalhour <= 4.9){
                    $reportClass->fee_student = $feestudent + (60 * $reportClass->total_hour_2);
                }elseif($finalhour <= 8.9){
                    $reportClass->fee_student = $feestudent + (55 * $reportClass->total_hour_2);
                }elseif($finalhour >= 9){
                    $reportClass->fee_student = $feestudent + (50 * $reportClass->total_hour_2);
                }

            }
            
            else{
                $reportClass->fee_student = $feestudent + ($classname_2->feeperhour * $reportClass->total_hour_2);
            }


          //  $reportClass->save();

           // dd($reportClass);
        }

 // Validate the request data

// Create a new record
//$reportClass = ReportClass::create([
  //  'date' => json_encode(['date']), // Encode to JSON if needed
    //'date_2' => json_encode(['date_2']), // Encode to JSON if needed
    // other attributes...
//]);


      //  dd( $reportClass);
        $reportClass ->save();
     }

    }


}
