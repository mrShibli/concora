<?php

namespace App\Http\Controllers;

use App\Mail\VisitorOtp;
use App\Models\FrontDesk;
use Illuminate\Support\Str;
use App\Mail\WelcomeVisitor;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class FrontDeskController extends Controller
{
    public function index()
    {
        $frontdesks = FrontDesk::where('otp_verified', 1)->get();
        return view('layouts.admin.frontdesk.index', compact('frontdesks'));
    }


    public function store(Request $request)
    {
        //  return $request;

        // Validation code goes here

        // Generate OTP
        $otp = mt_rand(100000, 999999);

        $identityid = mt_rand(1000000000, 9999999999);

        // Record the time when OTP is generated
        $otpGeneratedTime = now();

        // Save user data
        $user = new FrontDesk();
        $user->full_name = $request->input('full_name');
        $user->nationality = $request->input('nationality');
        $user->current_residency = $request->input('current_residency');
        $user->reference = $request->input('reference');
        $user->mobile_number = $request->input('mobile_number');
        $user->email_address = $request->input('email_address');
        $user->purpose = $request->input('purpose');
        $user->passport_id = $request->input('passport_id');
        $user->otp = $otp;
        $user->identityid = $identityid;
        $user->otp_generated_at = $otpGeneratedTime; // Save OTP generation time

        $user->save();

        // Send OTP via SMS
        // Code to send OTP via SMS goes here

        // Send OTP via Email
        Mail::to($user->email_address)->send(new VisitorOtp($user->full_name, $user->email_address, $otp));

        // // Redirect or return response
        // return redirect()->route('frontdesk.index')->with('success', 'Submitted successfully.');

        // Redirect to the verification page
        return redirect()->route('visitorverify.show', ['id' => $user->id]);
    }

    public function verifyshow($id)
    {

        $visitorINFO = FrontDesk::findOrFail($id);
        return view('layouts.admin.frontdesk.verifyotp', compact('visitorINFO'));
    }

    public function verify(Request $request, $id)
    {

        // Get visitor info from the request
        $visitorId = $request->input('visitor_id');
        $visitorINFO = FrontDesk::findOrFail($id);

        // return $visitorINFO;

        // Check if OTP matches
        if ($request->input('otp') == $visitorINFO->otp) {
            // Check if OTP has expired (more than 3 minutes have passed)
            $otpGeneratedTime = Carbon::parse($visitorINFO->otp_generated_at);
            $currentTime = now();
            $otpExpirationTime = $otpGeneratedTime->addMinutes(3);

            if ($currentTime->gt($otpExpirationTime)) {
                // OTP has expired, handle accordingly
                return Redirect::back()->withErrors(['otp' => 'OTP has expired. Please generate a new one.']);
            }

            // OTP matched, update otp_verified status
            $visitorINFO->update(['otp_verified' => 1]);

            Mail::to($visitorINFO->email_address)->send(new WelcomeVisitor($visitorINFO->full_name, $visitorINFO->identityid));

            // OTP matched, perform your actions here
            return redirect()->route('frontdesk.index')->with('success', 'OTP Verified successfully.');
        } else {
            // OTP didn't match, handle accordingly (e.g., show error message)
            return Redirect::back()->withErrors(['otp' => 'Invalid OTP. Please try again.']);
        }
    }


    public function destroy($id)
    {
        // Find the job position by ID and delete it
        $frontdesk = FrontDesk::findOrFail($id);
        $frontdesk->delete();

        // Redirect back to the index page with a success message
        return redirect()->route('frontdesk.index')->with('success', 'Deleted successfully.');
    }
}
