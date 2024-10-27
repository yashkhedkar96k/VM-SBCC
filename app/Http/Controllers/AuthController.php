<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    
    public function showLoginForm()
    {
         return view('index');
    }
    public function addstudent(){
        return view('add_new_student');
    }
 
    public function login(Request $request)
{
   
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    
    $credentials = $request->only('email', 'password');

  
    if (Auth::attempt($credentials)) {
       
        return redirect()->intended('dashboard')->with('success', 'Logged in successfully');
    }

   
    return back()->withErrors([
        'email' => 'The provided credentials do not match our records.',
    ])->withInput();
}

    public function dashboard()
    {
        return view('dashboard'); // A protected view that only authenticated users can access
    }

    // Logout function
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login')->with('success', 'Logged out successfully');
    }
}
