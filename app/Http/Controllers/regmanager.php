<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class regmanager extends Controller
{
    function signin(){
        return view( 'signin');
    }
    function signup(){
        return view( 'signup');
    }
    function signinpost(request $request){
        $request->validate([
            'email' => 'required',
            
            'password' => 'required']);

            $credentials = $request->only('email','password');
            if(reg::attempt($credentials)){
                return redirect()->intended(route('home'));
            }
            return redirect(route('signin'))->with("error","login details are incorrect");

    }
}
