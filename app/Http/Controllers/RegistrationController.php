<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration');
    }

    public function store() {
        $attributes = request() -> validate([
            'email' => 'required|email|max:255|unique:users,email',
            'username' => 'required|max:255|min:3|unique:users,username',
            'password' => 'required|max:255|min:5'
        ]);
        $attributes['password'] = bcrypt($attributes['password']);

        $user = User::create($attributes);
        session()->flash('success', 'Your account has been created.');
        Auth::login($user);
        return redirect('dashboard');
    }
}
