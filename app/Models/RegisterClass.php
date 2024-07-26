<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class RegisterClass extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'register_classes';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code_class',
        'class_type_id',
        'class_name_id',
        'class_package_id',
        'class_numer_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function class_type()
    {
        return $this->belongsTo(ClassType::class, 'class_type_id');
    }

    public function class_name()
    {
        return $this->belongsTo(ClassName::class, 'class_name_id');
    }

    public function class_package()
    {
        return $this->belongsTo(ClassPackage::class, 'class_package_id');
    }

    public function class_numer()
    {
        return $this->belongsTo(ClassNumber::class, 'class_numer_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
    public function reportclass()
    {
       return $this->hasOne(ReportClass::class, '');
    }
}
