<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Mail\WellcomeJoinInfinityLoopTeam;
use App\Models\HealthIndex;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function register()
    {
        if (Auth::check()) {
            return redirect()->route('index');
        }
        return view('web.register');
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

        $lsHe = new HealthIndex();
        $lsHe->user_id = $user->id;
        $lsHe->height = 170;
        $lsHe->weight = 70;
        $lsHe->heart_rate = 70;
        $lsHe->blood_pressure = 70;
        $lsHe->save();

        Mail::to((string)$user->email)->send(new WellcomeJoinInfinityLoopTeam($user));

        $request->session()->flash('success', "Account successfully registered.");
        return redirect()->route('index');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect()->route('index');
        }
        return view('web.login');
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
