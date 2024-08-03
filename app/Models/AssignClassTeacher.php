<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Traits\MyClientTrait;
use App\Traits\YourClassTrait;
//use App\Traits\MultiTenantModelTrait;
use Auth;

class AssignClassTeacher extends Model
{
    use SoftDeletes;
    //use MyClientTrait;
    //use YourClassTrait;
   //use MultiTenantModelTrait;
    use HasFactory;

    public $table = 'assign_class_teachers';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'teacher_id',
        'registrar_id',
        'assign_class_code',
        'classpackage_id',
        'class_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

   

    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }

    public function registrar()
    {
        return $this->belongsTo(User::class, 'registrar_id');
    }

    public function classes()
    {

         return $this->belongsToMany(ClassName::class, 'assign_class_teacher_class_name', 'assign_class_teacher_id', 'class_name_id');
    }

    public function classpackage()
    {

         return $this->belongsToMany(ClassPackage::class, 'assign_class_teacher_class_name', 'assign_class_teacher_id', 'class_package_id');
    }



    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
