<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'students';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'student_id',
        'registrar_id',
        'code',
        'age_stage',
        'note',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function student()
    {
        return $this->belongsTo(User::class, 'student_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registrar()
    {
        return $this->belongsTo(Registrar::class, 'registrar_id');
    }
}
