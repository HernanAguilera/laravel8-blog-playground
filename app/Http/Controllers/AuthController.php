<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UsersLoginRequest;
use App\Http\Requests\UsersRegisterRequest;
use App\Models\User;

class AuthController extends Controller
{

    public function login() {
        return view('auth.login');
    }

    public function loginCheck(UsersLoginRequest $request) {

        if (!$request->validated())
            return redirect()->back();

        auth()->attempt($request->only('email', 'password'));

        return redirect()->route('articles.index');
    }

    public function register() {
        return view('auth.register');
    }

    public function store(UsersRegisterRequest $request) {

        if (!$request->validated())
            return redirect()->back();

        User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email
        ]);

        return redirect()->route('auth.login');
    }
}
