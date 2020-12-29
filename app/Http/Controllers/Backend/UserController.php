<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login()
    {
       return view('Backend.User.login');
    }

    public function loginProcess(Request $request)
    {

        $request->validate([
            'email'=>'required',
            'password'=>'required'

        ]);
    $login_info=$request->except(['_token']);

    //dd(Auth::attempt($login_info));

        if (Auth::attempt($login_info)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        } else{
            return redirect()->back()->withErrors('Invalid Credentials');
        }
        

    }
   public function logout(){

    Auth::logout();
    return redirect()->route('login');
   }
    
}
