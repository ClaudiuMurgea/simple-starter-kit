<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class Auth extends Controller
{
    
    protected $redirectTo = RouteServiceProvider::HOME;
    
    public function index()
    {
        return view('pages.login');
    }
    public function login()
    {
        validator(request()->all(), [
            'email' => 'required|email',
            'password' => 'required'
        ])->validate();
        
        if(auth()->attempt(request()->only(['email','password']))) {
            return redirect('/dashboard');
        }
        return redirect()->route('dashboard')->withErrors(['email' => 'Invalid Credentials!']);
    }
}
