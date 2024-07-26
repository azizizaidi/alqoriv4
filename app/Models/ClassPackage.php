<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ClassPackage extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'class_packages';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'batch',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function assignclass()
    {
       
         return $this->belongsToMany(AssignClassTeacher::class,'assign_class_teacher_class_name', 'class_package_id','assign_class_teacher_id');
        
    }
}
