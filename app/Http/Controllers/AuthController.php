<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function register()
    {
        return view('web/register');
    }

    public function processRegister(RegisterRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        $user = new User();
        $user->fill($data);
        $user->save();
        $user->assignRole('User');

        auth()->login($user);
        $request->session()->flash('success', "Account successfully registered.");
        return redirect()->route('index');
    }

    public function login()
    {
        return view('web/login');
    }

    public function processLogin(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (Auth::attempt($credentials)) {

            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            Auth::login($user);

            return redirect()->intended('/');
        } else {
            $request->session()->flash('error', 'Invalid account and/or password. Please check and try again.');
            return back()->withInput();
        }
    }

    public function logout()
    {
        Session::flush();
        Auth::logout();
        return redirect()->route('index');
    }
}
