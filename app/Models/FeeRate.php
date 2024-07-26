<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use \DateTimeInterface;

class FeeRate extends Model
{
    use SoftDeletes;
   // use Auditable;
    use HasFactory;

    public $table = 'fee_rates';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'class_names_id',
        'total_hours_min',
        'total_hours_max',
        'feeperhour',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('d-m-Y H:i:s');
    }


     public function class()
     {
        return $this->belongsTo(ClassName::class,'class_names_id');
     }


}

