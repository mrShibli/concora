<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayActivity extends Model
{
    use HasFactory;

    protected $fillable = [
        'deposit_amount',
        'method',
        'payment_date',
        'slip_invoice_file',
        'balance',
        'applicant_id',
        'status',
        'recomNote',
        'request_deposit_by',
        'add_payment_by',
        'receive_deposit_by',
        'request_credit_by',
        'accept_credit_by',
        'sent_modified_by',
        'modified_by',
    ];
    
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id');
    }
}
