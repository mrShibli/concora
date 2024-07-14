<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use Illuminate\Http\Request;

class AggentCreate extends Controller
{
    public function index(){

        return view('layouts.agent.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'nationality' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'confirm_email' => 'required|same:email',
            'passport_no' => 'required|string|max:255',
            'expiry_date' => 'required|date',
            'nid_cnic_no' => 'required|string|max:255',
            'alternative_contact' => 'nullable|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'telegram' => 'nullable|string|max:255',
            'facebook_id' => 'nullable|string|max:255',
            'spouse_name' => 'nullable|string|max:255',
            'spouse_contact' => 'nullable|string|max:255',
            'reference_name' => 'nullable|string|max:255',
        ]);

        Agent::create($request->all());

        return redirect()->back()->with('success', 'Agent registered successfully.');
    }
}
