<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class PasswordResetController extends Controller
{
    //
    public function index(){
        return view('password-reset');
    }
    public function fgt(Request $request){
    $request->validate([
        'email'=>'required|email|exists:signups'
    ]);

    // dd($request->email);
    $token=Str::random(64);

    DB::table('password_resets')->insert([
        'email'=>$request->email,
        'token'=>$token,
        'created_at'=> Carbon::now(),

    ]);
    $success =Mail::send("email-password", ['token'=> $token],function($message)use ($request){
    $message->to($request->email);
    $message->subject('Reset Password ');
   });

   if($success){
    return redirect()->to (route('passwordreset'))->with('success', 'We have sent a password reset link to your email');
   }else{
    return redirect()->to (route('login'))->with('success', 'Password reset failed');
   }

   
 
    }
    public function reset($token){
     return view('pass-reset',compact('token'))  ; 

    }

    public function postemail(Request $request){
     $request->validate([
        
        'password'=>'required|confirmed',
        'password_confirmation'=>'required'
     ]);

     $updatepassword = DB::table('password_resets')
                         ->where([
                            "email" => $request->email,
                            "token" => $request->token,
                         ])->first();

                        

      if (!$updatepassword){
        return redirect()->to(route('login' ,['token' => $token= $request->token]))->with('success','The Token has Expired');
      }

      Signup::where("email", $request->email)->update(['password'=>Hash::make(
        $request->password
      )
]);

DB::table('password_resets')->where([
    'email'=>$request->email
])->delete();

return redirect()->to(route('login'))->with('success', 'Password updated successfully');

    }
}
