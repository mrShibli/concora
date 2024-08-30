<?php

namespace App\Models;

use App\Models\User;
use App\Models\Interview;
use App\Models\JobPosition;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Applicant extends Model
{
    use HasFactory;

    protected $table = 'applicants';

    protected $fillable = [
        'position_id', //1
        'nationality',//1
        'first_name', //1
        'last_name',//1
        'mother_name',//1
        'father_name',
        'religion',
        'martialstatus',
        'emirates_expiry',
        'country',
        'province',
        'city',
        'policeStation',
        'zip',
        'homeaddrss',
        'nidorcnicnumber',
        'spouse_name',
        'nidorcnicexpiry',
        'nid_cnic_front',//2
        'nid_cnic_back',//2
        
        'uaeresident',//1
        'emiratesid',
        'date_of_birth',//3
        'contact_number',//3
        'whatsapp_number',//3
        'email',//3
        'applicant_image',//4
        'applicant_passport',//4
        'passportno',//4
        'date_of_expiry',//4
        'applicant_resume',
        'specialpage', //5
        'submissionid',
        'otp',
        'otp_verified',
        'otp_generated_at',
        'reference', //5
        'balance',
        'appli_dri_lisence_frontpart',//5
        'appli_dri_lisence_backpart',//5
        'appli_dri_number',
        'appli_dri_expiry',
        'have_uae_licence',
        'UAE_Resident_Visa_No',
        'UAE_License_No', //5
        'SIM_No',
        'UAE_DL_Front',//2
        'UAE_DL_Back',//2
    ];

    // Define relationship with Position model
    public function position()
    {
        return $this->belongsTo(JobPosition::class);
    }

    // Define relationship with User model
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function payActivities()
    {
        return $this->hasMany(PayActivity::class, 'applicant_id');
    }

    public function interview()
    {
        return $this->hasMany(Interview::class, 'applicant_id');
    }
}
