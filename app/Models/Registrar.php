<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Registrar extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'registrars';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'code',
        'phone',
        'address',
        'registrar_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registrar()
    {
        return $this->belongsTo(User::class, 'registrar_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
