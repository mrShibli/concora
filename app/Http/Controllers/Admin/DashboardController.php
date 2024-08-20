<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Models\User;
use App\Mail\Demomail;
use App\Models\Contact;
use App\Models\Applicant;
use App\Models\Quotation;
use App\Models\JobPosition;
use App\Models\PayActivity;
use Illuminate\Http\Request;
use App\Mail\ApplicantVerifyOTP;
use App\Models\EmailVerification;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\JobApplicationVerification;
use Illuminate\Support\Facades\Validator;
use App\Models\Weather; // Assuming your Weather model namespace is App\Models\Weather

class DashboardController extends Controller
{
    public function editappli()
    {

        return 'hi';
    }

    public function verifyjobmail(Request $request)
    {
        // Get the fname and email from the request URL parameters
        $fname = $request->query('fname');
        $email = $request->query('email');

        // Validate email address
        $request->validate([
            'email' => 'required|email',
            // Other form validation rules
        ]);

        // Generate unique token for email verification
        $token = sha1(uniqid());

        // Save token in database (you might want to create a table for this)
        // Example:
        DB::table('email_verifications')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => now(),
        ]);

        $jobmaildata = [
            'email' => $email,
            'fname' => $fname,
            'token' => $token,
        ];

        // Send email verification link
        Mail::to($email)->send(new JobApplicationVerification($jobmaildata));

        return redirect('/verify-now')->with('verifymessage', 'An email verification link has been sent to your email address. Please verify your email before completing the job application.');
    }

    public function verifyNow(Request $request)
    {
        $email = $request->query('email');
        if (session()->has('verifyInfo')) {
            $vInfo = session()->get('verifyInfo');
            if ($vInfo['status'] == true) {
                return redirect()->route('verified.email')->with('verifymessage', 'Your email has been successfully verified. Welcome to Conqueror Services, Dubai. You will get a call from our recruitment team within 7-14 days for an interview in your home country.');
            }
        }
        return view('layouts.frontend.verifynow', compact('email'));
    }

    public function errorVerification(Request $request)
    {
        // Get the email from the request URL parameters
        $email = $request->session()->get('email');
        return view('layouts.frontend.errorverify', compact('email'));
    }

    public function resendVerificationEmail(Request $request)
    {
        // Retrieve email address from the request
        $email = $request->email;

        // Find the verification record associated with the email address
        $verificationRecord = Applicant::where('email', $email)
            ->where('otp_verified', 0)
            ->first();

        // Check if a verification record exists for the email address
        if ($verificationRecord) {
            // Generate a new OTP
            $otp = mt_rand(100000, 999999);

            // Update the verification record with the new OTP and current timestamp
            $verificationRecord->update([
                'otp' => $otp,
                'otp_generated_at' => now(),
            ]);

            // Send the verification email
            $getApplicant = Applicant::where('email', $email)->first();
            Mail::to($getApplicant->email)->send(new ApplicantVerifyOTP($getApplicant->first_name, $getApplicant->last_name, $getApplicant->email, $otp));

            $otpGeneratedTime = now();

            // Calculate OTP expiration time
            $otpExpirationTime = $otpGeneratedTime->addMinutes(5)->timestamp;

            // Encode OTP expiration time for URL
            $encodedExpirationTime = urlencode($otpExpirationTime);

            // Return a JSON response with the success message and redirect URL
            return response()->json([
                'status' => true,
                'message' => 'An OTP code has been sent to your email address. Please verify your email before completing the job application.',
                'redirect' => '/verify-now?verifymessage=' . urlencode('An OTP code has been sent to your email address. Please verify your email before completing the job application.') . '&email=' . urlencode($getApplicant->email) . '&otpExpirationTime=' . $encodedExpirationTime
            ]);
        } else {
            // Handle case when no verification record is found for the email address
            $getApplicant = Applicant::where('email', $email)->first();
            return response()->json([
                'status' => false,
                'message' => 'No verification record found for the email address.',
                'redirect' => '/verify-now?verifymessage=' . urlencode('No verification record found for the email address.') . '&email=' . urlencode($getApplicant->email)
            ]);
        }
    }

    public function changeEmail(Request $request)
    {
        // Retrieve email address from the request
        $email = $request->oldEmail;
        $newemail = $request->newEmail;

        $validator = Validator::make($request->all(), [
            'oldEmail' => 'required|email|exists:applicants,email',
            'newEmail' => 'required|email|unique:applicants,email',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors()->first()
            ]);
        }

        // Find the verification record associated with the email address
        $verificationRecord = Applicant::where('email', $email)
            ->where('otp_verified', 0)
            ->first();

        // Check if a verification record exists for the email address
        if ($verificationRecord) {
            // Generate a new OTP
            $otp = mt_rand(100000, 999999);

            // Update the verification record with the new OTP and current timestamp
            $verificationRecord->update([
                'otp' => $otp,
                'email' => $newemail,
                'otp_generated_at' => now(),
            ]);


            // Send the verification email
            $getApplicant = Applicant::where('email', $newemail)->first();
            Mail::to($getApplicant->email)->send(new ApplicantVerifyOTP($getApplicant->first_name, $getApplicant->last_name, $getApplicant->email, $otp));

            $otpGeneratedTime = now();

            // Calculate OTP expiration time
            $otpExpirationTime = $otpGeneratedTime->addMinutes(5)->timestamp;

            // Encode OTP expiration time for URL
            $encodedExpirationTime = urlencode($otpExpirationTime);

            // Return a JSON response with the success message and redirect URL
            return response()->json([
                'status' => true,
                'message' => 'An OTP code has been sent to your email address. Please verify your email before completing the job application.',
                'redirect' => '/verify-now?verifymessage=' . urlencode('An OTP code has been sent to your email address. Please verify your email before completing the job application.') . '&email=' . urlencode($getApplicant->email) . '&otpExpirationTime=' . $encodedExpirationTime
            ]);
        } else {
            // Handle case when no verification record is found for the email address
            $getApplicant = Applicant::where('email', $email)->first();
            return response()->json([
                'status' => false,
                'message' => 'No verification record found for the email address.',
                'redirect' => '/verify-now?verifymessage=' . urlencode('No verification record found for the email address.') . '&email=' . urlencode($getApplicant->email)
            ]);
        }
    }

    public function verified()
    {
        return view('layouts.frontend.verified');
    }
    public function verifyEmail(Request $request)
    {

        $getotpcode = $request->otpcode;

        // Retrieve email verification record from the database
        $verificationRecord = Applicant::where('otp', $getotpcode)->first();

        // Check if a record with the provided token exists
        if (!$verificationRecord) {
            // Handle case when token is not found
            return redirect('/error-verification')->with('error', 'Invalid verification code.');
        }

        // Check if token has expired (more than 3 minutes have passed)
        $tokenGeneratedTime = Carbon::parse($verificationRecord->otp_generated_at);
        $currentTime = now();
        $tokenExpirationTime = $tokenGeneratedTime->addMinutes(5);


        if ($currentTime->gt($tokenExpirationTime)) {
            // Token has expired, handle accordingly
            return redirect('/error-verification')->with('error', 'Verification code has expired. Please request a new one.')->with('email', $verificationRecord->email);
        }

        // Mark email as verified in your database
        $verificationRecord->update(['otp_verified' => 1]);
        $vInfo = session()->get('verifyInfo');
        session()->put('verifyInfo', ['status' => true, 'url' => $vInfo['url']]);
        // Redirect user to a confirmation page
        return redirect('/verified')->with('verifymessage', 'Your email has been successfully verified. Welcome to Conqueror Services, Dubai. You will get a call from our recruitment team within 7-14 days for an interview in your home country.');
    }

    public function sendmail()
    {
        $maildata = [
            'title' => 'Mail Testing',
            'message' => 'Email Testing message'
        ];

        Mail::to('uaeconquerorllc@gmail.com')->send(new Demomail($maildata));
        return redirect('/')->with('message', 'Mailsubmitted');
    }

    //Main Page
    public function index()
    {
        $JobApplicantRegular = Applicant::where('applicant_status', 'new_entry')->count();
        $JobApplicantNepalRegular = Applicant::where('applicant_status', 'new_entry')->where('nationality', 'Nepal')->count();
        $JobApplicantIndiaRegular = Applicant::where('applicant_status', 'new_entry')->where('nationality', 'India')->count();

        $applicants = Applicant::whereDoesntHave('payActivities')
            ->where('otp_verified', 1);

        $JobApplicant = $applicants->count();
        $JobApplicantNepal = $applicants->where('nationality', 'Nepal')->count();
        $JobApplicantIndia = $applicants->where('nationality', 'India')->count();

        $quotation = Quotation::count();
        $contactscount = Contact::count();
        $jobpositions = JobPosition::count();

        $JobApplicantOtpVerified = Applicant::where('otp_verified', 1)->count();
        $JobApplicantOtpNotVerified = Applicant::where('otp_verified', 0)->count();
        $JobApplicantInvited = Applicant::where('applicant_status', 'invited')->count();
        $JobApplicantHired = Applicant::where('applicant_status', 'hired')->count();


        $applicantsPaymentDues = Applicant::whereHas('payActivities', function ($query) {
            $query->where('deposit_amount', '>=', 1);
        })
            ->where('balance', '<', 6000)
            ->orderBy('created_at', 'desc')
            ->with(['payActivities' => function ($query) {
                $query->where('status', 'request_deposit')->orWhere('status', 'receive_deposit');
            }])
            ->count();

        $applicantsPaymnentRCV = Applicant::whereHas('payActivities', function ($query) {
            $query->where('status', 'request_deposit')
                ->orWhere('status', 'add_payment')
                ->where('deposit_amount', '>=', 1);
        })
            ->where('balance', '<', 6000)
            ->count();


        $applicantsCreditReqApproval = Applicant::whereHas('payActivities', function ($query) {
            $query->where('status', 'request_credit')
                ->where('deposit_amount', '>=', 1);
        })
            ->where('balance', '<', 6000)
            ->count();

        $applicantsInvited = Applicant::where('applicant_status', 'invited')
            ->orderBy('created_at', 'desc')
            ->count();

        $applicants = Applicant::orderBy('created_at', 'desc')->get();

        $applicantsAcceptedCount = Applicant::where('applicant_status', 'accepted')
            ->orderBy('created_at', 'desc')
            ->count();

        return view('layouts.admin.dashboard', compact('JobApplicant', 'quotation', 'jobpositions', 'contactscount', 'applicants', 'JobApplicantOtpVerified', 'JobApplicantOtpNotVerified', 'JobApplicantInvited', 'JobApplicantHired', 'JobApplicantNepal', 'JobApplicantIndia', 'applicantsPaymnentRCV', 'applicantsPaymentDues', 'applicantsCreditReqApproval', 'JobApplicantRegular', 'JobApplicantNepalRegular', 'JobApplicantIndiaRegular', 'applicantsInvited', 'applicantsAcceptedCount'));
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
