<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Applicant;
use App\Models\Interview;
use App\Mail\InPersonMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use SimpleSoftwareIO\QrCode\Facades\QrCode;


class InterviewController extends Controller
{
    // Interview submimt
    public function submit(Request $request, $id)
    {


        $interview = new Interview();

        $interview->applicant_id = $id;

        $interview->interview_method = $request->methodperson;
        // $interview->time = \Carbon\Carbon::createFromFormat('Y-m-d\TH:i', $request->time)->format('Y-m-d H:i');
        // Get the value of the datetime-local input field
        $scheduledAt = $request->input('time');
        // Convert the string to a Carbon instance
        $scheduledDate = Carbon::parse($scheduledAt);
        // Format the date
        $formattedDate = $scheduledDate->format('d F Y g:i A');

        if ($request->address) {
            $interview->address = $request->address;
        }

        if ($request->meetingurl) {
            $interview->meetingurl = $request->meetingurl;
    
            // Generate QR code for the meeting URL using GD
            $qrCode = QrCode::format('png')->size(300)->generate($request->meetingurl);
    
            // Create a file name for the QR code
            $fileName = 'qrcodes/interview_' . $interview->id . '.png';
    
            // Save the QR code directly in the public directory
            Storage::disk('public')->put($fileName, $qrCode);
    
            // Save the QR code path in the interview record
            $interview->qrcode_path = $fileName;
        }

        $interview->time = $formattedDate;
        $interview->contactnumber = $request->contactNumber;
        $interview->meetingurl = $request->meetingurl;
        $interview->zonecountry = $request->zonecountry;

        $interview->meetingpass = $request->meetingpass;
        $interview->message = $request->message;
        $interview->invitedby = Auth::id();

        $interview->save();

        $getapplicant = Applicant::findorfail($id);
        $clientname = $getapplicant->first_name;
        $clientnamelast = $getapplicant->last_name;
        $clientid = $getapplicant->id;
        $clientemail = $getapplicant->email;

        // Send email to applicant
        $sendinvitation = Mail::to($clientemail)->send(new InPersonMail($interview, $clientname, $clientnamelast, $clientid, $clientemail));


        if ($sendinvitation) {
            // Update applicant_status
            $getapplicant->applicant_status = 'invited';
            $getapplicant->save();
        } else {
            return redirect()->back()->with('success', 'Any Issue with email system/server so invitation email not sent');
        }

        return redirect()->back()->with('success', 'Applicant Invited for Interview');
    }

    // For Applicant invitaione mail acceptation
    public function accept(Request $request, $id, $email)
    {
        $applicant = Applicant::where('id', $id)->where('email', $email)->firstOrFail();
        $applicant->applicant_status = 'accepted';
        $applicant->save();
        return redirect()->route('success')->with('success', 'Applicant accepted successfully.');
    }

    // For Applicant invitaione mail rejection
    public function reject(Request $request, $id, $email)
    {
        $applicant = Applicant::where('id', $id)->where('email', $email)->firstOrFail();
        $applicant->applicant_status = 'rejected';
        $applicant->save();
        return redirect()->route('success')->with('success', 'Applicant reject.');
    }

    // For Applicant invitaione mail reschedule
    public function reschedule(Request $request, $id, $email)
    {
        $applicant = Applicant::where('id', $id)->where('email', $email)->firstOrFail();
        return view('layouts.frontend.reschedule', compact('applicant'));
    }

    // For Applicant invitaione mail reschedule
    public function rescheduleSubmit(Request $request, $id, $email)
    {
        $applicant = Applicant::where('id', $id)->where('email', $email)->firstOrFail();

        // Get the value of the datetime-local input field
        $scheduledAt = $request->input('scheduled_at');
        // Convert the string to a Carbon instance
        $scheduledDate = Carbon::parse($scheduledAt);
        // Format the date
        $formattedDate = $scheduledDate->format('d F Y g:i A');

        $interview = Interview::where('applicant_id', $id)->firstOrFail();
        $interview->scheduled_at = $formattedDate;
        $interview->save();

        $applicant->applicant_status = 'reschedule_requested';
        $applicant->save();

        return redirect()->route('success')->with('success', 'Applicant reschedule requested successfully.');
    }

    // For Applicant invitaione mail acceptation
    public function success()
    {
        return view('layouts.frontend.success');
    }
}
