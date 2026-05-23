<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function register(Request $request){
        $validated = $request->validate([
            'username'=>'required|string',
            'email'=>'required|string|unique:users',
            'password'=>'required|string|min:8|confirmed'
        ]);

        $user = User::create($validated);

        Auth::login($user);

        return redirect()->route('show.login');
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email'=>'required|string',
            'password'=>'required|string'
        ]);

        if (Auth::attempt($validated)){
            $request->session()->regenerate();

            return redirect()->route('show.register');
        }
        throw ValidationException::withMessages([
            'message'=>'Invalid Credentials'
        ]);
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('show.login');

    }
}
