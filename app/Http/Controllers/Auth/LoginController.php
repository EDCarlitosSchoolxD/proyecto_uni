<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Validation\ValidationException;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(Request $request){
    
        if(Auth::attempt($request->only('email','password'))){
            
            $request->session()->regenerate();
            
            return redirect()->intended('/admin')->with('status','You are logged in');
        }
    
        throw ValidationException::withMessages([
            'email'=>__('auth.failed')
        ]);
    }

    public function logout(Request $request,Redirector $redirect){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $redirect->to('/')->with('status',"You're logget out");

    }

}
