<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    public function authenticated()
    {
        if (in_array(Auth::user()->role, ['super_admin', 'group_admin', 'admin', 'supervisor', 'checker', 'operator'])) {
            return redirect('/admin')->with('message', 'Welcome to CONQUEROR');
        } 
        
        else if (Auth::user()->role == 'manager') {
            return redirect('admin/applicants')->with('message', 'Welcome Riders Manager');
        }
        
        else if (Auth::user()->role == 'user') {
            return redirect('admin/applicants')->with('message', 'Welcome');
        } 
        else {
            return redirect()->back()->with('message', 'Welcome User');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout(); // Logout the user
        $request->session()->invalidate(); // Invalidate the session
        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/login'); // Redirect to the login page
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
