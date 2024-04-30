<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    

    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect('/Dashboard');
        }

        return view('adminLogin'); // Show admin login form
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed3
            return redirect()->intended('/Dashboard');
        }

        // Authentication failed
        return redirect()->route('admin.login')->withErrors(['error' => 'Invalid credentials']);
    }
}
