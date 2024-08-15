<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interview extends Model
{
    use HasFactory;
    protected $fillable = ['applicant_id', 'interview_method', 'time', 'address', 'contactnumber', 'meetingurl', 'zonecountry', 'scheduled_at', 'qrcode_path', 'message', 'meetingpass', 'invitedby'];

    public function applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id');
    }
}
