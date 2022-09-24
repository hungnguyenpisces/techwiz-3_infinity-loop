<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login()
    {
        $user = Auth::user();
        if ($user == null) {
            //inform user wrong username or password
            return view('admin.login')->with('error', 'Username or password is not correct');
        } else {
            if ($user->hasRole(['Super-Admin', 'Admin', 'Staff'])) {
                return redirect()->route('admin.dashboard');
            } else {
                Session::flush();
                Auth::logout();
                return redirect()->route('admin.login.show')->with('error', 'You do not have permission to access this page');
            }
        }
    }

    public function processLogin(LoginRequest $request)
    {
        $credentials = $request->getCredentials();

        if (Auth::attempt($credentials)) {
            $user = Auth::getProvider()->retrieveByCredentials($credentials);

            if ($user->hasRole(['Super-Admin', 'Admin', 'Staff'])) {
                Auth::login($user);
                $token = auth('api')->setTTL(240)->attempt($credentials);
                $resToken = [
                    'access_token' => $token,
                    'token_type' => 'bearer',
                    'expires_in' => auth('api')->factory()->getTTL() * 60 * 4
                ];
                return Redirect::route('admin.dashboard')->with('token', $resToken);
            } else {
                Session::flush();
                Auth::logout();
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
        return redirect()->route('admin.login.show');
    }

    public function report()
    {
        return view('admin.report');
    }

    public function widgets()
    {
        return view('admin.widgets');
    }
}
