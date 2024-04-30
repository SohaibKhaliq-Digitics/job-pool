<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use App\Models\admin;
use App\Models\Company;
use App\Models\Employee;
use Session;

class adminController extends Controller
{
    public function showLoginForm()
    {
        return view('adminLogin');
    }
    public function dashboard()
    {
        Session::put('page', 'Dashboard');
        $emp = Employee::all();
        $com = Company::all();
        return view('admin.dashboard', compact('emp', 'com'));
    }
    public function registerAdmin(Request $request)
    {
           $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'password' => 'required',
            ]);

            $admin = new Admin;
            $admin->name = $request->name;
            $admin->email = $request->email;
            $admin->phone = $request->phone;
            $admin->password = bcrypt($request->password);
            $admin->save();

            return redirect()->back()->with('success', 
            'Account created successfully. If you want to login then press login button');
       

    }
    public function newAccount()
    {
        // Session::put('page', 'Dashboard');
        // $emp = Employee::all();
        // $com = Company::all();
        return view('newAccount');
    }

    // Process login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');


        $email = $request->email;
        $password = $request->password;




        $admin = Admin::where('email', $email)->first();



        // dd($admin->password,$password);

        if ($admin) {
            $confirmPassword = $admin->password;
            // Verify password
            if ($password === $confirmPassword) {
                dd('all pass');
                // Admin data exists and password matches
                Session::put('page', 'add_event');
                $eventData = Company::all();

                Session::put('admin_id', $admin->id);
                Session::put('admin_name', $admin->name);
                Session::put('admin_email', $admin->email);

                return redirect(URL::to('/Dashboard'));
            } else {
                // Password does not match
                
                return view('adminLogin')->with('error', 'Password Not Matched');
            }
        } else {
            // Admin data with provided email does not exist
            dd('admin not match');
            return view('adminLogin')->with('error', 'Admin Not Exist');
        }

    }

    // Logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin-login');
    }
}
