<?php

namespace App\Models;

use \DateTimeInterface;
use App\Traits\Auditable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class HistoryPayment extends Model
{
    use SoftDeletes;
    use Auditable;
    use HasFactory;

    public $table = 'history_payments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'amount_paid',
        'receipt_paid',
        'created_at',
        'updated_at',
        'deleted_at',
        'paid_by_id',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

 

     public function paidby()
     {
        return $this->belongSTo(User::class, 'paid_by_id');
     }


}

