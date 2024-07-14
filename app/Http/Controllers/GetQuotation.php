<?php

namespace App\Http\Controllers;

use App\Models\Quotation;
use Illuminate\Http\Request;

class GetQuotation extends Controller
{
    public function index()
    {
        $allquotation = Quotation::all();
        return view('layouts.admin.quotation.index', compact('allquotation'));
    }
    // Display the specified applicant.
    public function show(Quotation $id)
    {
        $quotation = $id;
        return view('layouts.admin.quotation.view', compact('quotation'));
    }
    public function store(Request $request)
    {
        // return $request;
        // Validate the incoming request
        $this->validate($request, [
            'firstName' => 'required|string|max:255',
            'lastName' => 'nullable|string|max:255',
            'phoneNumber_qut' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'enquiry' => 'required|string',
            'deliveryTime' => 'required|string',
            'message' => 'required|string|max:50255',
        ]);

        // Create a new Quotation instance and populate it with the request data
        $quotation = new Quotation();

        $quotation->firstName = $request->input('firstName');
        $quotation->lastName = $request->input('lastName');
        $quotation->phoneNumber_qut = $request->input('phoneNumber_qut');
        $quotation->email = $request->input('email');
        $quotation->enquiry = $request->input('enquiry');
        $quotation->deliveryTime = $request->input('deliveryTime');
        $quotation->message = $request->input('message');

        // Save the Quotation instance to the database
        $quotation->save();

        // Redirect back with a success message
        return redirect()->back()->with('message', 'Quotation Submitted Successfully.');
    }

    public function destroy($id)
    {
        // Find the job position by ID and delete it
        $Quotation = Quotation::findOrFail($id);
        $Quotation->delete();

        // Redirect back to the index page with a success message
        return redirect()->back()->with('success', 'JDeleted successfully.');
    }
}
