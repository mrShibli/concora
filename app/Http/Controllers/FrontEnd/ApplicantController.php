<?php

namespace App\Http\Controllers\FrontEnd;

use App\Models\Applicant;
use App\Models\Interview;
use App\Models\JobPosition;
use App\Models\TempApplicant;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Mail\ApplicantVerifyOTP;
use Spatie\ImageOptimizer\Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Spatie\ImageOptimizer\OptimizerChainFactory;

class ApplicantController extends Controller
{
    // Display a listing of the applicants.
    public function index()
    {
        $applicants = Applicant::where('applicant_status', 'new_entry')
            ->orderBy('created_at', 'desc')
            ->paginate(20); 
    
        return view('layouts.admin.job-applicants.index', compact('applicants'));
    }



    public function nextRecord($id)
    {
        $currentRecord = Applicant::findOrFail($id);
        $applicant = Applicant::where('id', '>', $currentRecord->id)
                            ->orderBy('id')
                            ->first();

        if ($applicant) {
            return view('layouts.admin.job-applicants.view', compact('applicant'));
        } else {
            
            return redirect()->back();
        }
    }

    public function previousRecord($id)
    {
        $currentRecord = Applicant::findOrFail($id);
        $applicant = Applicant::where('id', '<', $currentRecord->id)
                                ->orderBy('id', 'desc')
                                ->first();

        if ($applicant) {
            return view('layouts.admin.job-applicants.view', compact('applicant'));
        } else {
            return redirect()->back();
        }
    }
    

    public function indexverified()
    {
        $applicants = Applicant::where('otp_verified', 1)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('layouts.admin.job-applicants.indexverified', compact('applicants'));
    }

    public function notverified()
    {
        $applicants = Applicant::where('otp_verified', 0)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('layouts.admin.job-applicants.index', compact('applicants'));
    }

    public function invited()
    {
        $applicants = Applicant::where('applicant_status', 'invited')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('layouts.admin.job-applicants.indexinvited', compact('applicants'));
    }

    public function hired()
    {
        $applicants = Applicant::where('applicant_status', 'hired')
            ->orderBy('created_at', 'desc')
            ->get();
        return view('layouts.admin.job-applicants.indexhired', compact('applicants'));
    }

    public function duesPayment()
    {
        $applicants = Applicant::where('balance', '<', 6000)
            ->orderBy('created_at', 'desc')
            ->get();
        return view('layouts.admin.job-applicants.indexDues', compact('applicants'));
    }

    
    public function paymentHistory(Applicant $id)
    {
        $applicant = $applicant = $id;
       // return $applicant;
        return view('layouts.admin.job-applicants.ViewDueHistory', compact('applicant'));
    }

    public function paymentView(Applicant $id)
    {
        $applicant = $applicant = $id;
       // return $applicant;
        return view('layouts.admin.job-applicants.paumentView', compact('applicant'));
    }


    public function store($tempDataId)
    {

        // Function to generate random letters
        function generateRandomLetters($length)
        {
            $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
            return substr(str_shuffle($letters), 0, $length);
        }

        // Retrieve temporary applicant data
        $tempData = TempApplicant::where('id', $tempDataId)->first();
        $tempData1 = json_decode($tempData->applicant_data1, true);
        $tempData2 = json_decode($tempData->applicant_data2, true);
        $tempData3 = json_decode($tempData->applicant_data3, true);
        $mergedTempData = array_merge($tempData1, $tempData2, $tempData3);

        // Create a new Applicant instance
        $applicant = new Applicant();

        // Generate random letters and numbers
        

        // Generate OTPs and record the generation time
        $otp = mt_rand(100000, 999999);
        $smsOtp = mt_rand(100000, 999999);
        $otpGeneratedTime = now();

        // Concatenate letters and numbers to form submission ID
        $submissionId = session()->get('submissionID');

        // Assign form input values and uploaded file names
        $applicantData = [
            'position_id' => $mergedTempData['job_position'],
            'nationality' => $mergedTempData['nationality'],
            'first_name' => $mergedTempData['firstname'],
            'last_name' => $mergedTempData['lastname'],
            'mother_name' => $mergedTempData['mother_name'],
            'father_name' => $mergedTempData['father_name'],
            'religion' => $mergedTempData['religion'],
            'martialstatus' => $mergedTempData['martialstatus'],
            'country' => $mergedTempData['nationality'],
            'province' => $mergedTempData['province'],
            'city' => $mergedTempData['city'],
            'policeStation' => $mergedTempData['policeStation'],
            'zip' => $mergedTempData['zip'],
            'homeaddrss' => $mergedTempData['homeaddrss'],
            'uaeresident' => $mergedTempData['uaeresident'] === 'Yes' ? 1 : 0,
            'emiratesid' => $mergedTempData['emiratesid'],
            'emirates_expiry' => Carbon::createFromDate($mergedTempData['emirates_expiry_year'], $mergedTempData['emirates_expiry_month'], $mergedTempData['emirates_expiry_day']),
            'date_of_birth' => Carbon::createFromDate($mergedTempData['date_of_birth_year'], $mergedTempData['date_of_birth_month'], $mergedTempData['date_of_birth_day']),
            'date_of_expiry' => Carbon::createFromDate($mergedTempData['passport_doe_year'], $mergedTempData['passport_doe_month'], $mergedTempData['passport_doe_day']),
            'contact_number' => $mergedTempData['contact_number'],
            'whatsapp_number' => $mergedTempData['whatsapp_number'],
            'email' => $mergedTempData['email'],
            'appli_dri_number' => $mergedTempData['appli_dri_number'],
            'appli_dri_expiry' => Carbon::createFromDate($mergedTempData['drving_lic_expiry_year'], $mergedTempData['drving_lic_expiry_month'], $mergedTempData['drving_lic_expiry_day']),
            'applicant_image' => isset($mergedTempData['applicant_photo']) ? $mergedTempData['applicant_photo'] : '',
            'applicant_passport' => isset($mergedTempData['applicant_passport']) ? $mergedTempData['applicant_passport'] : '',
            'passportno' => isset($mergedTempData['passportno']) ? $mergedTempData['passportno'] : '',
            'applicant_resume' => isset($mergedTempData['applicant_resume']) ? $mergedTempData['applicant_resume'] : '',
            'specialpage' => isset($mergedTempData['specialpage']) ? $mergedTempData['specialpage'] : '',
            'nid_cnic_front' => isset($mergedTempData['nid_cnic_front']) ? $mergedTempData['nid_cnic_front'] : '',
            'nid_cnic_back' => isset($mergedTempData['nid_cnic_back']) ? $mergedTempData['nid_cnic_back'] : '',
            'UAE_DL_Front' => isset($mergedTempData['UAE_DL_Front']) ? $mergedTempData['UAE_DL_Front'] : '',
            'UAE_DL_Back' => isset($mergedTempData['UAE_DL_Back']) ? $mergedTempData['UAE_DL_Back'] : '',
            'appli_dri_lisence_frontpart' => isset($mergedTempData['appli_dri_lisence_frontpart']) ? $mergedTempData['appli_dri_lisence_frontpart'] : '',
            'appli_dri_lisence_backpart' => isset($mergedTempData['appli_dri_lisence_backpart']) ? $mergedTempData['appli_dri_lisence_backpart'] : '',
            'submissionid' => $submissionId,
            'otp' => $otp,
            'sms_otp' => $smsOtp,
            'sms_otp_generated_at' => $otpGeneratedTime,
            'otp_generated_at' => $otpGeneratedTime,
            'reference' => $mergedTempData['reference'],
            'nidorcnicnumber' => $mergedTempData['nidorcnicnumber'],
            // 'nidorcnicexpiry' => $mergedTempData['nidorcnicexpiry'],
            'have_uae_licence' => $mergedTempData['have_uae_licence'],
            'UAE_Resident_Visa_No' => $mergedTempData['UAE_Resident_Visa_No'],
            'UAE_License_No' => $mergedTempData['UAE_License_No'],
            'SIM_No' => $mergedTempData['SIM_No'],
        ];

        // Save the Applicant instance
        $applicant->fill($applicantData)->save();


        Mail::to($applicant->email)->send(new ApplicantVerifyOTP($applicant->first_name, $applicant->last_name, $applicant->email, $otp));

        // Calculate OTP expiration time
        $otpExpirationTime = $otpGeneratedTime->addMinutes(5)->timestamp;

        // Encode OTP expiration time for URL
        $encodedExpirationTime = urlencode($otpExpirationTime);


        // Send otp to phone number
        $this->sendSmSOtp($mergedTempData['contact_number'], $otp);

        // Pass necessary data to the view
        $redirectUrl = route('verify.now').'?verifymessage=' . urlencode('An OTP code has been sent to your email and phone number. Please verify your info before completing the job application.') . '&email=' . urlencode($applicant->email) . '&otpExpirationTime=' . $encodedExpirationTime.'';
        session()->put('verifyInfo', ['status' => false, 'url' => $redirectUrl]);
        return $redirectUrl;
    }

    public function submitStep1(Request $request){
        $stepData = session()->has('step1') ? json_decode(session()->get('step1')) : null;

        $rules = [
            'firstname' => 'required|max:20',
            'lastname' => 'required|max:20',
            'mother_name' => 'required|string|max:255',
            'date_of_birth_day' => 'required|between:1,31',
            'date_of_birth_month' => 'required|string|max:25',
            'date_of_birth_year' => 'required',
            'email' => 'required|unique:applicants,email|email|max:255',
            'nationality' => 'required|string|max:255',
            'job_position' => 'required|string|max:255',
            'contact_numberr' => 'required|string|max:20',
            'whatsapp_numberr' => 'nullable|string|max:20',
        ];
 
        if($stepData && isset($stepData->applicant_photo)) {
            $rules['applicant_photo'] = 'nullable|image|max:2048';
        } else {
            $rules['applicant_photo'] = 'required|image|max:2048';
        }

        $validator = Validator::make($request->all(), $rules);

        // Check if validation fails
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $step1Data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'mother_name' => $request->mother_name,
            'date_of_birth_year' => $request->date_of_birth_year,
            'date_of_birth_month' => $request->date_of_birth_month,
            'date_of_birth_day' => $request->date_of_birth_day,
            'nationality' => $request->nationality,
            'job_position' => $request->job_position,
            'contact_number' => $request->contact_numberr,
            'whatsapp_number' => $request->whatsapp_numberr
        ];

        if ($request->hasFile('applicant_photo')) {
            $imageName1 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_photo.' . $request->applicant_photo->extension();
            $request->applicant_photo->move(public_path('applicants'), $imageName1);
            $step1Data['applicant_photo'] = $imageName1;
        }else{
            $step1Data['applicant_photo'] = isset($stepData->applicant_photo) ? $stepData->applicant_photo : '';
        }

        if(session()->has('step1')){
            $tempappdata = json_decode(session()->get('step1'));
            $tempApplicant = TempApplicant::where('email', $tempappdata->email)->latest()->first();
        }else{
            $tempApplicant = new TempApplicant;
        }

        $tempApplicant->email = $request->email;
        $tempApplicant->current_step = 2;
        $tempApplicant->applicant_data1 = json_encode($step1Data);
        $tempApplicant->save();

        session()->put('step1', json_encode($step1Data));

        return response()->json([
            'status' => true,
            'message' => 'Data saved successfully',
            'data1' => $step1Data
        ]);
    }

    public function submitStep2(Request $request)
    {
        if (!session()->has('step1')) {
            session()->flash('dataFailure');
            return response()->json([
                'status' => 'redirect',
                'redirect' => route('others.apply')
            ]);
        }
        
        if(session()->has('step2')){
            $stepData = json_decode(session()->get('step2'));
        }
        $validator = Validator::make($request->all(), [
            'passportno' => 'required|unique:applicants,passportno|max:255',
            'passport_doe_day' => 'required|between:1,31',
            'passport_doe_month' => 'required|between:1,12',
            'passport_doe_year' => 'required',
            'father_name' => 'required|string|max:50',
            'nidorcnicnumber' => 'required|max:255',
            'martialstatus' => 'required|max:255',
            'uaeresident' => 'required|in:Yes,No|max:255',
            'religion' => 'required|string|max:255',
            'emiratesid' => 'required_if:uaeresident,Yes|max:255',
            'emirates_expiry_day' => 'required_if:uaeresident,Yes',
            'emirates_expiry_month' => 'required_if:uaeresident,Yes',
            'emirates_expiry_year' => 'required_if:uaeresident,Yes',
            'province' => 'required|max:100',
            'homeaddrss' => 'required|string|max:255',
            'city' => 'required|max:100',
            'policeStation' => 'required|max:255',
            'zip' => 'required|max:100',
            'reference' => 'nullable|max:255',
            'applicant_passport' => isset($stepData->applicant_passport) ? 'nullable|image|max:2048' : 'required|image|max:2048',
            'specialpage' => 'nullable|image|max:2048',
            'nid_cnic_front' => 'nullable|image|max:2048',
            'nid_cnic_back' => 'nullable|image|max:2048',
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $step2Data = [
            'passportno' => $request->passportno,
            'passport_doe_day' => $request->passport_doe_day,
            'passport_doe_month' => $request->passport_doe_month,
            'passport_doe_year' => $request->passport_doe_year,
            'father_name' => $request->father_name,
            'nidorcnicnumber' => $request->nidorcnicnumber,
            'martialstatus' => $request->martialstatus,
            'uaeresident' => $request->uaeresident,
            'religion' => $request->religion,
            'emiratesid' => $request->emiratesid,
            'emirates_expiry_year' => $request->emirates_expiry_year,
            'emirates_expiry_month' => $request->emirates_expiry_month,
            'emirates_expiry_day' => $request->emirates_expiry_day,
            'homeaddrss' => $request->homeaddrss,
            'province' => $request->province,
            'city' => $request->city,
            'policeStation' => $request->policeStation,
            'zip' => $request->zip,
            'reference' => $request->reference,
        ];

        if ($request->hasFile('applicant_passport')) {
            $imageName2 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_passport.' . $request->applicant_passport->extension();
            $request->applicant_passport->move(public_path('applicants'), $imageName2);
            $step2Data['applicant_passport'] = $imageName2;
        }else{
            $step2Data['applicant_passport'] = $stepData->applicant_passport;
        }

        if ($request->hasFile('specialpage')) {
            $imageName3 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_specialpage.' . $request->specialpage->extension();
            $request->specialpage->move(public_path('applicants'), $imageName3);
            $step2Data['specialpage'] = $imageName3;
        }elseif(isset($stepData->specialpage)){
            $step2Data['specialpage'] = $stepData->specialpage;
        }
        if ($request->hasFile('nid_cnic_front')) {
            $imageName4 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_nid_cnic_front.' . $request->nid_cnic_front->extension();
            $request->nid_cnic_front->move(public_path('applicants'), $imageName4);
            $step2Data['nid_cnic_front'] = $imageName4;
        }elseif(isset($stepData->nid_cnic_front)){
            $step2Data['nid_cnic_front'] = $stepData->nid_cnic_front;
        }
        if ($request->hasFile('nid_cnic_back')) {
            $imageName5 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_nid_cnic_back.' . $request->nid_cnic_back->extension();
            $request->nid_cnic_back->move(public_path('applicants'), $imageName5);
            $step2Data['nid_cnic_back'] = $imageName5;
        }elseif(isset($stepData->nid_cnic_back)){
            $step2Data['nid_cnic_back'] = $stepData->nid_cnic_back;
        }   

        $tempappdata = json_decode(session()->get('step1'));
        $tempApplicant = TempApplicant::where('email', $tempappdata->email)->latest()->first();
        $tempApplicant->current_step = 3;
        $tempApplicant->applicant_data2 = json_encode($step2Data);
        $tempApplicant->save();
        
        session()->put('step2', json_encode($step2Data));

        return response()->json([
            'status' => true,
            'message' => 'Data saved successfully',
            'data1' => $step2Data
        ]);

    }

    public function submitStep3(Request $request)
    {
        if (!session()->has('step1') || !session()->has('step2')) {
            session()->flash('dataFailure');
            return response()->json([
                'status' => 'redirect',
                'redirect' => route('others.apply')
            ]);
        }

        $validator = Validator::make($request->all(), [
            'appli_dri_number' => 'required|string|max:255',
            'drving_lic_expiry_day' => 'required|integer|min:1|max:31',
            'drving_lic_expiry_month' => 'required|integer|min:1|max:12',
            'drving_lic_expiry_year' => 'required|integer|min:' . date('Y') . '|max:' . (date('Y') + 20),
            'have_uae_licence' => 'required|string',
            'UAE_Resident_Visa_No' => 'nullable|string|max:255',
            'UAE_License_No' => 'nullable|string|max:255',
            'SIM_No' => 'nullable|string|max:255',
            'appli_dri_lisence_frontpart' => 'required|file|mimes:jpg,png,jpeg,webp|max:2048',
            'appli_dri_lisence_backpart' => 'required|file|mimes:jpg,png,jpeg,webp|max:2048',
            'UAE_DL_Front' => 'nullable|file|mimes:jpg,png,jpeg,webp|max:2048',
            'UAE_DL_Back' => 'nullable|file|mimes:jpg,png,jpeg,webp|max:2048',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        $step3Data = [
            'appli_dri_number' => $request->input('appli_dri_number'),
            'drving_lic_expiry_day' => $request->input('drving_lic_expiry_day'),
            'drving_lic_expiry_month' => $request->input('drving_lic_expiry_month'),
            'drving_lic_expiry_year' => $request->input('drving_lic_expiry_year'),
            'have_uae_licence' => $request->input('have_uae_licence'),
            'UAE_Resident_Visa_No' => $request->input('UAE_Resident_Visa_No'),
            'UAE_License_No' => $request->input('UAE_License_No'),
            'SIM_No' => $request->input('SIM_No')
        ];

        if ($request->hasFile('appli_dri_lisence_frontpart')) {
            $imageName6 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_driving_license_front.' . $request->appli_dri_lisence_frontpart->extension();
            $request->appli_dri_lisence_frontpart->move(public_path('applicants'), $imageName6);
            $step3Data['appli_dri_lisence_frontpart'] = $imageName6;
        }
        if ($request->hasFile('appli_dri_lisence_backpart')) {
            $imageName7 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_driving_license_back.' . $request->appli_dri_lisence_backpart->extension();
            $request->appli_dri_lisence_backpart->move(public_path('applicants'), $imageName7);
            $step3Data['appli_dri_lisence_backpart'] = $imageName7;
        }
        if ($request->hasFile('UAE_DL_Front')) {
            $imageName8 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_UAE_DL_Front.' . $request->UAE_DL_Front->extension();
            $request->UAE_DL_Front->move(public_path('applicants'), $imageName8);
            $step3Data['UAE_DL_Front'] = $imageName8;
        }
        if ($request->hasFile('UAE_DL_Back')) {
            $imageName9 = str_replace(' ', '_', $request->firstname) . '_' . time() . '_UAE_DL_Back.' . $request->UAE_DL_Back->extension();
            $request->UAE_DL_Back->move(public_path('applicants'), $imageName9);
            $step3Data['UAE_DL_Back'] = $imageName9;
        }

        $tempappdata = json_decode(session()->get('step1'));
        $tempApplicant = TempApplicant::where('email', $tempappdata->email)->latest()->first();
        $tempApplicant->current_step = 4;
        $tempApplicant->applicant_data3 = json_encode($step3Data);
        $tempApplicant->save();
        
        session()->put('step3', json_encode($step3Data));

        $redirectLink = $this->store($tempApplicant->id);
        // $redirectLink = '';
        session()->flash('success', "We've recieved your application");
        return response()->json([
            'status' => true,
            'message' => "We've recieved your application",
            'redirect' => $redirectLink
        ]);
    }
    // Display the specified applicant.
    public function show(Applicant $id)
    {
        $applicant = $id;

        // Find the previous applicant
        $previousApplicant = Applicant::where('id', '<', $applicant->id)->latest()->first();

        // Find the next applicant
        $nextApplicant = Applicant::where('id', '>', $applicant->id)->oldest()->first();

        // Find the first applicant
        $firstApplicant = Applicant::oldest()->first();

        // Find the last applicant
        $lastApplicant = Applicant::latest()->first();

        // Mark the application as viewed
        $applicant->viewed = true;
        $applicant->save();

        $interviewdata = Interview::where('applicant_id', $applicant->id)->first();


        return view('layouts.admin.job-applicants.view', compact('applicant', 'previousApplicant', 'nextApplicant', 'firstApplicant', 'lastApplicant', 'interviewdata'));
    }

    // Show the form for editing the specified applicant.
    public function editappli($id)
    {

        // return $id; 
        $applicant = Applicant::findOrFail($id);
        $jobs_position =  JobPosition::all();
        // $allpositions = JobPosition::findOrFail($id);
 
        return view('layouts.admin.job-applicants.edit', compact('applicant','jobs_position'));
    }

    // Update the specified applicant in storage.

    // Verify email from admi panek
    public function verifyemailadmin($id)
    {
        $getApplicant = Applicant::findorfail($id);
        if ($getApplicant->otp_verified == 0) {
            $otp = mt_rand(100000, 999999);
            $otpGeneratedTime = now();
            $getApplicant->otp = $otp;
            $getApplicant->otp_generated_at = $otpGeneratedTime;
            $getApplicant->save();
            Mail::to($getApplicant->email)->send(new ApplicantVerifyOTP($getApplicant->first_name, $getApplicant->last_name, $getApplicant->email, $otp));
            return redirect()->back()->with('otpstatus', 'Email Verificaon OTP Sent to Applicant');
        } else {
            return redirect()->back()->with('message', 'User Verified');
        }
    }

    public function verifyemailadminotp(Request $request)
    {
        // Retrieve the OTP from the request
        $otp = $request->input('otpcode');

        // Retrieve the applicant with the provided OTP
        $applicant = Applicant::where('otp', $otp)->first();

        // Check if an applicant with the provided OTP exists
        if ($applicant) {
            // Update otp_verified column to 1
            $applicant->otp_verified = 1;
            // Save the changes to the database
            $applicant->save();
            return response()->json(['message' => 'OTP verified successfully', 'otp' => $otp, 'mainotp' => $applicant->otp], 200);
        } else {
            return response()->json(['message' => 'OTP Wrong', 'otp' => $otp], 200);
        }
    }

    public function update(Request $request, $id)
    {
        
 
        $applicant = Applicant::findOrFail($id);
        
        if($request->position_id){
            $applicant->position_id = $request->position_id;
        }
        if($request->first_name){
            $applicant->first_name = $request->first_name;
        }
        if($request->last_name){
            $applicant->last_name = $request->last_name;
        }
        if($request->nationality){
            $applicant->nationality = $request->nationality;
        }
        if($request->nationality){
            $applicant->nationality = $request->nationality;
        }
        if($request->mother_name){
            $applicant->mother_name = $request->mother_name;
        }
        if($request->uaeresident){
            $applicant->uaeresident = $request->uaeresident;
        }

           // Applicant nid_cnic_front
           $nid_cnic_front_file = $request->hasFile('nid_cnic_front') ? str_replace(' ', '_', $request->first_name) . '_' . time() . '_nid_cnic_front.' . $request->nid_cnic_front->extension() : $applicant->nid_cnic_front;
           if ($request->hasFile('nid_cnic_front')) {
               if ($applicant->nid_cnic_front) {
                   File::delete(public_path('/' . $applicant->nid_cnic_front));
               }
               $request->nid_cnic_front->move(public_path('applicants'), $nid_cnic_front_file);
           }
           $applicant->nid_cnic_front = $nid_cnic_front_file;
   
           // Applicant nid_cnic_back
           $nid_cnic_back_file = $request->hasFile('nid_cnic_back') ? str_replace(' ', '_', $request->first_name) . '_' . time() . '_nid_cnic_back.' . $request->nid_cnic_back->extension() : $applicant->nid_cnic_back;
           if ($request->hasFile('nid_cnic_back')) {
               if ($applicant->nid_cnic_back) {
                   File::delete(public_path('applicants/' . $applicant->nid_cnic_back));
               }
               $request->nid_cnic_back->move(public_path('applicants'), $nid_cnic_back_file);
           }
           $applicant->nid_cnic_back = $nid_cnic_back_file;
        
        if($request->date_of_birth){
          $applicant->date_of_birth = $request->date_of_birth;
        }
        if($request->contact_number){
          $applicant->contact_number = $request->contact_number;
        }
        if($request->whatsapp_number){
         $applicant->whatsapp_number = $request->whatsapp_number;
        }
        if($request->email){
          $applicant->email = $request->email;
        }

        // Applicant image
        $applicant_image_file = $request->hasFile('applicant_image') ? str_replace(' ', '_', $request->first_name) . '_' . time() . '_image.' . $request->applicant_image->extension() : $applicant->applicant_image;
        if ($request->hasFile('applicant_image')) {
            if ($applicant->applicant_image) {
                File::delete(public_path('applicants/' . $applicant->applicant_image));
            }
            $request->applicant_image->move(public_path('applicants'), $applicant_image_file);
        }

        $applicant->applicant_image = $applicant_image_file;

        // Applicant Passport
        $applicant_passport_file = $request->hasFile('applicant_passport') ? str_replace(' ', '_', $request->first_name) . '_' . time() . '_passport.' . $request->applicant_passport->extension() : $applicant->applicant_passport;
        if ($request->hasFile('applicant_passport')) {
            if ($applicant->applicant_passport) {
                File::delete(public_path('applicants/' . $applicant->applicant_passport));
            }
            $request->applicant_passport->move(public_path('applicants'), $applicant_passport_file);
        }
         $applicant->applicant_passport = $applicant_passport_file;
 
         if($request->passportno){
            $applicant->passportno = $request->passportno;
          }
        if($request->date_of_expiry){
            $applicant->date_of_expiry = $request->date_of_expiry;
        }
    
        // Applicant Special Page
        $specialpage_file = $request->hasFile('specialpage') ? str_replace(' ', '_', $request->first_name) . '_' . time() . '_specialpage.' . $request->specialpage->extension() : $applicant->specialpage;
        if ($request->hasFile('specialpage')) {
            if ($applicant->specialpage) {
                File::delete(public_path('applicants/' . $applicant->specialpage));
            }
            $request->specialpage->move(public_path('applicants'), $specialpage_file);
        }

        $applicant->specialpage = $specialpage_file;

        // Applicant dri_lisence_frontpart
        $appli_dri_lisence_frontpart_file = $request->hasFile('appli_dri_lisence_frontpart') ? str_replace(' ', '_', $request->first_name) . '_' . time() . '_resume.' . $request->appli_dri_lisence_frontpart->extension() : $applicant->appli_dri_lisence_frontpart;
        if ($request->hasFile('appli_dri_lisence_frontpart')) {
            if ($applicant->appli_dri_lisence_frontpart) {
                File::delete(public_path('applicants/' . $applicant->appli_dri_lisence_frontpart));
            }
            $request->appli_dri_lisence_frontpart->move(public_path('applicants'), $appli_dri_lisence_frontpart_file);
        }
        $applicant->appli_dri_lisence_frontpart = $appli_dri_lisence_frontpart_file;


        // Applicant dri_lisence_backpart
        $appli_dri_lisence_backpart_file = $request->hasFile('appli_dri_lisence_backpart') ? str_replace(' ', '_', $request->first_name) . '_' . time() . '_dri_lisence_backpart.' . $request->appli_dri_lisence_backpart->extension() : $applicant->appli_dri_lisence_backpart;
        if ($request->hasFile('appli_dri_lisence_backpart')) {
            if ($applicant->appli_dri_lisence_backpart) {
                File::delete(public_path('applicants/' . $applicant->appli_dri_lisence_backpart));
            }
            $request->appli_dri_lisence_backpart->move(public_path('applicants'), $appli_dri_lisence_backpart_file);
        }
        $applicant->appli_dri_lisence_backpart = $appli_dri_lisence_backpart_file;
        if( $request->appli_dri_number){
            $applicant->appli_dri_number = $request->appli_dri_number;
        }
        if( $request->reference){
            $applicant->reference = $request->reference;
        }
        $applicant->save();



      
   


        // // Applicant resume
        // $applicant_resume_file = $request->hasFile('applicant_resume') ? str_replace(' ', '_', $request->first_name) . '_' . time() . '_resume.' . $request->applicant_resume->extension() : $applicant->applicant_resume;
        // if ($request->hasFile('applicant_resume')) {
        //     if ($applicant->applicant_resume) {
        //         File::delete(public_path('applicants/' . $applicant->applicant_passport));
        //     }
        //     $request->applicant_resume->move(public_path('applicants'), $applicant_resume_file);
        // }
        // $applicant->applicant_resume = $applicant_resume_file;


     


        // // Update the Applicant instance with the new data
        // $applicant->position_id = $validatedData['position_id'];
        // $applicant->nationality = $validatedData['nationality'];
        // $applicant->first_name = $validatedData['first_name'];
        // $applicant->last_name = $validatedData['last_name'];
        // $applicant->mother_name = $validatedData['mother_name'];
        // $applicant->father_name = $validatedData['father_name'];
        // $applicant->martialstatus = $validatedData['martialstatus'];
        // $applicant->emirates_expiry = $validatedData['emirates_expiry'];
        // $applicant->country = $validatedData['country'];
        // $applicant->province = $validatedData['province'];
        // $applicant->city = $validatedData['city'];
        // $applicant->zip = $validatedData['zip'];
        // $applicant->homeaddrss = $validatedData['homeaddrss'];
        // $applicant->uaeresident = $request->has('uaeresident') ? 1 : 0;
        // $applicant->emiratesid = $validatedData['emiratesid'];
        // $applicant->date_of_birth = $validatedData['date_of_birth'];
        // $applicant->contact_number = $validatedData['contact_number'];
        // $applicant->whatsapp_number = $validatedData['whatsapp_number'];
        // $applicant->email = $validatedData['email'];
     

        // $applicant->nidorcnicnumber = $validatedData['nidorcnicnumber'];
        // $applicant->nidorcnicexpiry = $validatedData['nidorcnicexpiry'];

        // $newBalance = floatval($request->input('balance'));
        // $applicant->balance += $newBalance;

        // // Save the updated Applicant instance
        // $applicant->save();

        // // Redirect or return a response
        return redirect()->back()->with('success', 'Applicant data updated successfully.');
    }


    public function destroy($id)
    {
        // Find the job position by ID and delete it
        $applicant = Applicant::findOrFail($id);

        // Delete the associated files if they exist
        $filesToDelete = [];
        if ($applicant->applicant_image) {
            $filesToDelete[] = public_path('applicants/' . $applicant->applicant_image);
        }
        if ($applicant->applicant_passport) {
            $filesToDelete[] = public_path('applicants/' . $applicant->applicant_passport);
        }
        if ($applicant->applicant_resume) {
            $filesToDelete[] = public_path('applicants/' . $applicant->applicant_resume);
        }
        if ($applicant->appli_dri_lisence_frontpart) {
            $filesToDelete[] = public_path('applicants/' . $applicant->appli_dri_lisence_frontpart);
        }
        if ($applicant->appli_dri_lisence_backpart) {
            $filesToDelete[] = public_path('applicants/' . $applicant->appli_dri_lisence_backpart);
        }

        // Delete the files
        File::delete($filesToDelete);

        $applicant->delete();

        // Redirect back to the index page with a success message
        return redirect()->back()->with('success', 'Applicant deleted successfully.');
    }

    // Update applicant status
    public function updateStatus(Request $request, $id)
    {
        $applicant = Applicant::findOrFail($id);
        $applicant->applicant_status = $request->status;
        $applicant->save();

        return redirect()->back()->with('success', 'Applicant status updated successfully');
    }

    public function sendSmSOtp($phone, $otp){

        $APIID = 'API1585204848741';
        $APIPASS = 'Conq@2022lLc';
        $SENDERID = 'Conquror';
        
        try{
            $client = new Client();
            $response = $client->request('GET', 'http://api.smsala.com/api/SendSMS', [
                'query' => [
                    'api_id' => $APIID,
                    'api_password' => $APIPASS,
                    'sms_type' => 'P',
                    'encoding' => 'T',
                    'sender_id' => $SENDERID,
                    'phonenumber' => $phone,
                    'textmessage' => 'Dear user, Your verification code is: '.$otp
                ]
            ]);

            if ($response->getStatusCode() == 200) {
                $body = $response->getBody();
                $data = json_decode($body, true);
                if($data['status'] == 'F'){
                    Log::error("A new sms sending failed from $phone and otp is $otp . Reason for the error is " . $data['remarks']);
                }
            }
        }catch(\Exception $e){
            Log::error("A new sms sending failed from $phone and otp is $otp . Reason for the error is " . $e);
        }
    }


    public function verifysmsadmin($id)
    {
        $getApplicant = Applicant::findorfail($id);
        if ($getApplicant->otp_verified == 0) {
            $otp = mt_rand(100000, 999999);
            $otpGeneratedTime = now();
            $getApplicant->otp = $otp;
            $getApplicant->otp_generated_at = $otpGeneratedTime;
            $getApplicant->save();
            Mail::to($getApplicant->email)->send(new ApplicantVerifyOTP($getApplicant->first_name, $getApplicant->last_name, $getApplicant->email, $otp));
            return redirect()->back()->with('otpstatus', 'Email Verificaon OTP Sent to Applicant');
        } else {
            return redirect()->back()->with('message', 'User Verified');
        }
    }

}
