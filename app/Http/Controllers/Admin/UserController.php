<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('layouts.admin.users.index', compact('users'));
    }


    public function create()
    {
        return view('layouts.admin.users.create');
    }
    public function store(Request $request)
    {

       
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'contact_number' => 'required',
            'city' => 'required',
            'state_district' => "required",
            'email' => 'required|string|email|max:255|unique:users,email,',
            'passport_no' => 'required|max:255|unique:users,passport_no',
            'passport_image' => 'required|image',
            'socile_page' => 'required|image',
            'nid' => 'required|image',
            'resident' => 'required|image',
            'photo' => 'required|image',
        
        ]);
      
        $user = new User();
        $user->first_name  = $request->first_name;
        $user->uae_resident_no = $request->uae_resident_no;
        $user->last_name  = $request->last_name;
        $user->email = $request->email;
        $user->nationality = $request->nationality;
        $user->dob = $request->dob_;
        $user->contact_number = $request->contact_number;
        $user->whatsapp_number = $request->whatsapp_number;
        $user->father_name = $request->father_name;
        $user->mother_name = $request->mother_name;
        $user->passport_no = $request->passport_no;
        $user->date_of_expiry = $request->date_of_expiry;
        $user->nid_cnic_no = $request->nid_cnic_no;
        $user->marital_status = $request->marital_status;
        $user->uae_resident = $request->uae_resident;
        $user->home_country_address = $request->home_country_address;
        $user->city = $request->city;
        $user->state_district = $request->state_district;
        $user->police_station = $request->police_station;
        $user->po = $request->po;
        $user->reference_name = $request->reference_name;
        $user->department = $request->department;
        $user->role = $request->role; 

        if ($request->hasFile('passport_image')) {
            $passportFrontName = str_replace(' ', '_', $request->get('first_name_')) . '_' . time() . '_passport_image.' . $request->passport_image->extension();
            $request->passport_image->move(public_path('applicants'), $passportFrontName);
            $user->passport_image = $passportFrontName;
        }
 
        if ($request->hasFile('socile_page')) {
            $socile_page = str_replace(' ', '_', $request->get('first_name_')) . '_' . time() . '_socile_page.' . $request->socile_page->extension();
            $request->socile_page->move(public_path('applicants'), $socile_page);
            $user->socile_page = $socile_page;
        }
     
        if ($request->hasFile('nid')) {
            $nid = str_replace(' ', '_', $request->get('first_name_')) . '_' . time() . 'nid.' . $request->nid->extension();
            $request->nid->move(public_path('applicants'), $nid);
            $user->nid = $nid;
        }

        if ($request->hasFile('photo')) {
            $photo = str_replace(' ', '_', $request->get('first_name_')) . '_' . time() . 'photo.' . $request->photo->extension();
            $request->photo->move(public_path('applicants'), $photo);
            $user->photo = $photo;
        }

        if ($request->hasFile('resident')) {
            $resident = str_replace(' ', '_', $request->get('name')) . '_' . time() . '_resident.' . $request->resident->extension();
            $request->resident->move(public_path('applicants'), $nid);
            $user->resident = $nid;
        }
        $user->save();
        return redirect()->route('admin.users.index')->with('success', 'User created successfully');
  
    }




    public function edit(User $user)
    {
        return view('layouts.admin.users.edit', compact('user'));
    }



    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $id,
            'role' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'User updated successfully');
    }

    public function destroy(User $user)
    {
        // Find the job position by ID and delete it
        $user = User::findOrFail($user->id);
        $user->delete();

        // Redirect back to the index page with a success message
        return redirect()->back()->with('message', 'Deleted successfully.');
    }
}
