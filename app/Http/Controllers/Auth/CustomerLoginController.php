<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

use App\Http\Controllers\Controller;
use App\Models\Signup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerLoginController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('login');
    }

    // public function login(Request $request): RedirectResponse
    // {
    //     $credentials = $request->only('email', 'password');
        // dd($credentials);

        // if (Auth::guard('signup')->attempt($credentials)) {
        //     return redirect()->intended(route('login.admin'));
        // }else{
        //     return back()->withErrors([
        //         'email' => 'The provided credentials do not match our records.',
        //     ])->onlyInput('email');
        // }
        // if (Auth::guard('signup')->check()) {
        //     dd('User is authenticated.');
        // } else {
        //     dd('User is not authenticated.');
        // }

    // }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = Signup::where('email', $credentials['email'])->first();

        if ($user && password_verify($credentials['password'], $user->password)) {
            // Authentication successful
            session(['user_id' => $user->id]); // Store user ID in session
            return redirect()->intended(route('login.admin'));
        }

        // Authentication failed
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }
    public function logout()
{
    session()->forget('user_id');
    return redirect('/');
}
}
