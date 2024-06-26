<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Hash;


class AuthController extends Controller
{
    public function create()
    {
        return view('auth.registr');
    }

    public function registr(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:App\Models\User',
            'password' => 'required|min:6',
        ]);
        $user = User::create([
            'name' => request()->name,
            'email' => request()->email,
            'password' => Hash::make(request()->password),
        ]);
        

        $user->createToken('myAppToken');
        return redirect()->route('login');
    }
        public function login(){
            return view('auth.login');
        }
        
        public function customLogin(Request $request){
            $request->validate([
                'email' => 'required|email',
                'password' => 'required|min:6',
            ]);
            $credentials=$request->only('email', 'password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
        }
    
}
