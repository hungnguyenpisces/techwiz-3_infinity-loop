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
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    public function changePassword()
    {
        return view('user.change-password');
    }
    public function updatePassword(Request $request)
    {
        # Validation
        $request->validate([
            'old_password' => 'required|min:8',
            'new_password' => 'required|confirmed',
            'new_password_confirmation' => 'required|same:new_password'
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->user()->id)->update([

            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password changed successfully!");
    }
  
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

    if (!$data) {
      return redirect()->back()->withInput() ->withErrors($data ->errors());
    }
   
    $data['password'] = Hash::make($data['password']);
    $user = new User();
    $user->fill($data);
    $user->save();
    $user->assignRole('User');

    Mail::to((string)$user->email)->send(new WellcomeJoinInfinityLoopTeam($user));

    auth()->login($user);
    $request->session()->flash('success', "Account successfully registered.");
    return redirect()->route('index');
  }

  public function login(Request $request)
  {
    if (Auth::check()) {
      return redirect()->route('index');
    }
    return view('web.login')->with('error', session("error"));
  }

  public function processLogin(LoginRequest $request)
  {
    $credentials = $request->getCredentials();
    if (Auth::attempt($credentials)) {
      $credentials["activated"]="TRUE";
      if (!Auth::attempt($credentials)) {
        Session::flush();
        Auth::logout();
        return Redirect::route('login.show')->with('error', 'You have been blocked by an administrator');
      }
      $user = Auth::getProvider()->retrieveByCredentials($credentials);
      Auth::login($user);
      $token = auth('api')->setTTL(240)->attempt($credentials);
      $resToken = [
        'access_token' => $token,
        'token_type' => 'bearer',
        'expires_in' => auth('api')->factory()->getTTL() * 60 * 4
      ];
      return Redirect::route('index')->with('token', $resToken);
    } else {
      Session::flush();
      Auth::logout();
      return Redirect::route('login.show')->with('error', 'Username or password is not correct');
    }
  }

  public function logout()
  {
    Session::flush();
    Auth::logout();
    return redirect()->route('login.show');
  }
}
