<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;

use App\Models\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class SignupController extends Controller
{
    //
    public function index(){
        return view('signup');
    }
   
    public function store(Request $request){

         $request->validate([
            'Fullnames'=>'required',
            'Email'=>'required|unique:signups,Email',
            'password'=>'required|min:2|confirmed:password_confirmation',
            'password_confirmation' => 'required|min:2',
        ]);
        //  dd($request->all());

        $users = new Signup;
         
        $users->Fullnames=$request->Fullnames;
        $users->Email=$request->Email;
        $users->password=  Hash::make($request->password);
        $users->password_confirmation= Hash::make($request->password_confirmation);
       
         $users->save();
         Session::flash('success', 'Product stored successfully.');
       
         return redirect()->back();
    }
    // public function postSignUp(Request $request){

      
    //      $request->validate([
    //         'email' => ['required'],
    //         'password' => ['required'],
    //     ]);

    //     $credentials = $request->only('email', 'password');

    //     if (Auth::guard('customers')->attempt($credentials)) {
    //         return redirect()->intended(route('customer.dashboard'));
    //     }

    //     return redirect()->back()->withInput($request->only('email'));
             
            
      
 
        
 
 
     
   
}
