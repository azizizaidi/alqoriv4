<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassName extends Model
{
    use SoftDeletes;
   // use Auditable;
    use HasFactory;

    public $table = 'class_names';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'feeperhour',
        'allowanceperhour',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

  /*  protected $casts = [
        'name' => 'array',
    ];

    protected $attributes = [
        'name' => '[]'
     ];*/

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

   // public function allowance()
   // {


    //  return $this->hasOneThrough(
     // ReportClass::class,
     // RegisterClass::class,
     // 'class_name_id', // Foreign key on the cars table...
     // 'class_id', // Foreign key on the owners table...
     // 'id', // Local key on the mechanics table...
    //  'id'); // Local key on the cars table...
   //  }

     public function registerclass()
     {
        return $this->hasOne(RegisterClass::class, '');
     }

     public function assignclass()
     {

          return $this->belongsToMany(AssignClassTeacher::class,'assign_class_teacher_class_name', 'class_name_id','assign_class_teacher_id');

     }

     public function assignclass_2()
     {

          return $this->belongsToMany(AssignClassTeacher::class,'assign_class_teacher_class_name', 'class_name_id','assign_class_teacher_id');

     }

     public function classpackage()
     {

          return $this->belongsToMany(ClassPackage::class,'assign_class_teacher_class_name', 'class_name_id','class_package_id');

     }
}

