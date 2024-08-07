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
    ];
    
    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id');
    }
}
