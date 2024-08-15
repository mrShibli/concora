<?php

namespace App\Http\Controllers\Admin;

use App\Models\Applicant;
use App\Models\PayActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AddPayment extends Controller
{
    // Add/Send Deposit
    public function paymentdeposit(Request $request)
    {
        // dd($request);
        $request->validate([
            'deposit_amount' => 'required|string',
            'paymenttype' => 'required|string',
            'payment_date' => 'required|date',
            'slip_invoice_file' => 'required|file|mimes:jpg,png,pdf|max:2048', // Validate file type and size
        ]);

        // Handle file upload
        if ($request->hasFile('slip_invoice_file')) {
            $file = $request->file('slip_invoice_file');
            $filename = 'slip_invoice_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('payment'), $filename);

            // Save file path to database
            $payment = new PayActivity();
            $payment->request_deposit_by = Auth::id();
            $payment->applicant_id = $request->applicant_id;
            $payment->deposit_amount = $request->deposit_amount;
            $payment->method = $request->paymenttype;
            $payment->status = 'request_deposit';
            $payment->payment_date = $request->payment_date;
            $payment->slip_invoice_file = 'payment/' . $filename;
            $payment->save();


            return redirect()->route('applicants.paymentHistory', ['id' => $request->applicant_id])
                ->with('success', 'Deposit Request Successful.');
        }

        return redirect()->back()->with('error', 'File upload failed.');
    }

    // Add Extra Payment
    public function paymentadd(Request $request)
    {
        // dd($request); 

        $request->validate([
            'deposit_amount' => 'required|string',
            'paymenttype' => 'required|string',
            'payment_date' => 'required|date',
            'slip_invoice_file' => 'required|file|mimes:jpg,png,pdf|max:2048', // Validate file type and size
        ]);

        // Handle file upload
        if ($request->hasFile('slip_invoice_file')) {
            $file = $request->file('slip_invoice_file');
            $filename = 'slip_invoice_' . time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('payment'), $filename);

            // Save file path to database
            $payment = new PayActivity();
            $payment->add_payment_by = Auth::id();
            $payment->applicant_id = $request->applicant_id;
            $payment->deposit_amount = $request->deposit_amount;
            $payment->method = $request->paymenttype;
            $payment->payment_date = $request->payment_date;
            $payment->status = 'add_payment';
            $payment->slip_invoice_file = 'payment/' . $filename;
            $payment->save();

            return redirect()->back()->with('success', 'Add Payment Request Successful.');
        }

        return redirect()->back()->with('error', 'File upload failed.');
    }


    // Receive Payment
    public function updateBalance(Request $request, Applicant $applicant)
    {
        $request->validate([
            'slip_invoice_number' => 'required|string', // Ensure slip_invoice_number is provided
        ]);

        $depositAmount = (float) $request->input('deposit_amount');

        // Maximum allowed balance based on your current schema precision
        $maxBalance = 6000; // Adjust this based on your column's max value

        // Check if the new balance exceeds the maximum allowed
        if ($applicant->balance + $depositAmount > $maxBalance) {
            return redirect()->back()->with('error', 'The deposit amount is too high and would exceed the maximum allowed balance.');
        }

        if ($applicant->applicant_status === 'hired') {
            // Update the applicant's balance
            $applicant->balance += $depositAmount;
            $applicant->save();

            // Assuming you have the PayActivity ID available in the request
            $payActivityId = $request->input('pay_activity_id'); // Make sure this field is in your form

            // Find and update the PayActivity record
            if ($payActivityId) {
                $payActivity = PayActivity::findOrFail($payActivityId);
                $payActivity->receive_deposit_by = Auth::id();
                $payActivity->slip_invoice_number = $request->input('slip_invoice_number');
                $payActivity->is_recevied = 'yes'; // Mark as received
                $payActivity->status = 'receive_deposit';
                $payActivity->save();
            }
            return redirect()->back()->with('success', 'Balance updated successfully.');
        } else {
            return redirect()->back()->with('error', 'The applicant is not hired yet.');
        }
    }


    // Send for Balance Credit approval
    public function reqBalanceApproval(Request $request, Applicant $applicant)
    {
        $request->validate([
            'recomNote' => 'required|min:5', // Ensure the value is a positive number
        ]);

        //  return $request;


        // Assuming you have the PayActivity ID available in the request
        $payActivityId = $request->input('pay_activity_id'); // Make sure this field is in your form

        // Find and update the PayActivity record
        if ($payActivityId) {
            $payActivity = PayActivity::findOrFail($payActivityId);
            $payActivity->request_credit_by = Auth::id();
            $payActivity->is_recevied = 'done'; // Mark as received
            $payActivity->status = 'request_credit';
            $payActivity->recomNote = $request->recomNote;
            $payActivity->save();
        }

        return redirect()->back()->with('success', 'Credit balance request submitted successfully and is awaiting approval.');
    }

    // Send for Balance Credit approval
    public function approveBalanceApproval(Request $request, Applicant $applicant)
    {

        // Assuming you have the PayActivity ID available in the request
        $payActivityId = $request->input('pay_activity_id'); // Make sure this field is in your form

        // Find and update the PayActivity record
        if ($payActivityId) {
            $payActivity = PayActivity::findOrFail($payActivityId);
            $payActivity->accept_credit_by = Auth::id();
            $payActivity->is_recevied = 'done'; // Mark as received
            $payActivity->status = 'accept_credit';
            $payActivity->save();
        }

        return redirect()->back()->with('success', 'Requested Credit successfully Approved.');
    }

    // Accept for Balance Credit approval
    public function reqBalanceAccept(Request $request, Applicant $applicant)
    {
        $request->validate([
            'recomNote' => 'required|min:5', // Ensure the value is a positive number
        ]);

        //  return $request;


        // Assuming you have the PayActivity ID available in the request
        $payActivityId = $request->input('pay_activity_id'); // Make sure this field is in your form

        // Find and update the PayActivity record
        if ($payActivityId) {
            $payActivity = PayActivity::findOrFail($payActivityId);
            $payActivity->accept_credit_by = Auth::id();
            $payActivity->status = 'accept_credit';
            $payActivity->save();
        }

        return redirect()->back()->with('success', 'Balance updated successfully.');
    }
}
