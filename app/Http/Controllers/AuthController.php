<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function create()
    {
        return view('auth.create');
    }
    public function register()
    {
        return view('auth.register');
    }
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    public function store(AuthForm $authForm)
    {
        $credentials = $authForm->validated();

        if(auth()->attempt($credentials,remember: $authForm->remember))
        {
            $authForm->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',

        ])->onlyInput();
    }
}
