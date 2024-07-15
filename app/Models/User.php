<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'nationality',
        'dob',
        'contact_number',
        'whatsapp_number',
        'father_name',
        'mother_name',
        'passport_no',
        'date_of_expiry',
        'nid_cnic_no',
        'marital_status',
        'uae_resident',
        'home_country_address',
        'city',
        'state_district',
        'police_station',
        'po',
        'reference_name',
        'department',
        'role',
        'passport_image',
        'socile_page',
        'nid',
        'photo',
        'resident',
        'uae_resident_no'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
