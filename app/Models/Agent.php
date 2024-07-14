<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'nationality',
        'email',
        'passport_no',
        'expiry_date',
        'nid_cnic_no',
        'alternative_contact',
        'whatsapp',
        'telegram',
        'facebook_id',
        'spouse_name',
        'spouse_contact',
        'reference_name',
    ];
}
