<?php

namespace App\Http\Controllers\Admin;

use App\Models\PayActivity;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddPayment extends Controller
{
    // Add Deposit
    public function paymentdeposit(Request $request)
    {
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
            $payment->applicant_id = $request->applicant_id;
            $payment->deposit_amount = $request->deposit_amount;
            $payment->method = $request->paymenttype;
            $payment->payment_date = $request->payment_date;
            $payment->slip_invoice_file = 'payment/' . $filename;
            $payment->save();

            return redirect()->back()->with('success', 'Deposit Request Successful.');
        }

        return redirect()->back()->with('error', 'File upload failed.');
    }
}
