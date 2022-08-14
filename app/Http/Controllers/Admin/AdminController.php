<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function processLogin(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (Auth::attempt($credentials)) {
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            if ($user->hasRole(['Super-Admin', 'Admin'])) {
                Auth::login($user);
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('admin.login.show')->with('error', 'You do not have permission to access this page');
            }
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

    public function dashboard()
    {
        $user = Auth::user();
        if ($user == null) {
            return redirect()->route('admin.login.show');
        } else {
            if ($user->hasRole(['Super-Admin', 'Admin'])) {
                return view('admin.dashboard');
            } else {
                return redirect()->route('admin.login.show')->with('error', 'You do not have permission to access this page');
            }
        }
    }
}
