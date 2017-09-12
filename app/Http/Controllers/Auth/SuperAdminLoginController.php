<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class SuperAdminLoginController extends Controller
{
    //
    public function __construct(){
      $this->middleware('guest:superadmin', ['except'=>['logout']]);
    }
      public function showLoginForm(){
        return view('auth.superadmin-login');
      }
      public function login(Request $request){
        //Validate the form data
        $this->validate($request,[
          'email'  => 'required|email',
          'password' => 'required|min:6'
        ]);
        //attempt to log the user in
        if (Auth::guard('superadmin')->attempt(['email'  => $request->email,'password' => $request->password], $request->remember)){
          //if successful, then redirect to their intented location
          return redirect()->intended(route('superadmin.dashboard'))->with(['userType' => 'SuperAdmin']);

        }
        return redirect()->back()->withInput($request->only('email','remember'));


        //if unsuccessful, then redirect back to login page with the form data
      }
      public function logout(){

        Auth::guard('superadmin')->logout();
        return redirect('/');
      }
}
