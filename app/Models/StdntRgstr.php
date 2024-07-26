<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StdntRgstr extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'stdnt_rgstrs';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'registrar_id',
        'student_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registrar()
    {
        return $this->belongsTo(Registrar::class, 'registrar_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
