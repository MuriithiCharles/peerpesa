<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AuthController extends Controller
{
	public function login(){
		
		return view('auth.login');
	}
    
    public function handlelogin(Request $request){
    	$this->validate($request, User::$login_validation_rules);
    	$data = $request->only('email', 'password');
    	if(\Auth::attempt($data)){

    		
    		return redirect()->intended('user_home');
    	}
    	//return back()->withInput();
    	//return Redirect::to('login')->with('error', 'You are now logged in.');
    	return Redirect::back()->withInput()->withErrors(['wrong password! please login again']);
    }
   public function logout(){
   	\Auth::logout();
   	return redirect()->route('login');
   }
}
