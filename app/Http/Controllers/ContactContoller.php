<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactContoller extends Controller
{
    public function contact()
    {
        return view('layouts.frontend.contactupdate');
    }


    public function index()
    {
        $contacts = Contact::get();
        return view('layouts.admin.contactform.index', compact('contacts'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $this->validate($request, [
            'fname' => 'required|string|max:255',
            'lname' => 'nullable|string|max:255',
            'phone_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:50255',
        ]);

        $contacts = new Contact();

        $contacts->fname = $request->fname;
        $contacts->lname = $request->lname;
        $contacts->phone_number = $request->phone_number;
        $contacts->email = $request->email;
        $contacts->subject = $request->subject;
        $contacts->message = $request->message;

        $contacts->save();

        return redirect()->back()->with('success', 'Form Submitted Successfully.');
    }

    public function destroy($id)
    {
        // Find the job contact by ID and delete it
        $contactDLT = Contact::findOrFail($id);
        $contactDLT->delete();

        // Redirect back to the index page with a success message
        return redirect()->back()->with('success', 'Contact form data deleted successfully.');
    }
}
