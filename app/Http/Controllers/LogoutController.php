<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LogoutController extends Controller
{
    public function destroy() {
        auth() -> logout();
        return redirect('/');
    }

    public function login() {
        return view('login');
    }

    public function loguser() {
        $attributes = request()->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        
        if(auth()->attempt($attributes)) {
            session() -> regenerate();
            return redirect('/dashboard');
        }

        throw ValidationException::withMessages([
            'username' => 'Fail to verified the username.',
            'password' => 'Recheck your password.'
        ]);

        // return back()
        // ->withInput()
        // ->withErrors([]);
    }
}
