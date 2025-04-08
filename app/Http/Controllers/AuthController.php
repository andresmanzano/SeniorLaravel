<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator =  $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
    
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }
        $validator['emailPassword'] = 'Email address or password is incorrect.';
        return redirect("login")->withErrors($validator);
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'Registration successful! Please log in.');
    } 

    public function dashboard()
    {
        if(Auth::check()){
            return view('home');
        }
  
        return redirect("login")->withSuccess('You are not allowed to access');
    }
    
    /**
     * Log out account user.
     *
     * @return \Illuminate\Routing\Redirector
     */
    public function signOut() {

        Session::flush();
        Auth::logout();
  
        return Redirect('/');
    }
}
