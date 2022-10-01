<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Hospital;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
use App\Mail\NewAccount;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

//use redirect
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
  function __construct()
  {
    $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
    $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
    $this->middleware('permission:user-edit', ['only' => ['edit', 'update', 'block']]);
    $this->middleware('permission:user-delete', ['only' => ['destroy']]);
  }
  public function index(Request $request)
  {

    $admin = Auth::user();
    if ($admin->hospital_id != null) {
      $users = User::where('hospital_id', $admin->hospital_id)->orderBy('id', 'ASC')->paginate(10);
    } else {
      $users = User::orderBy('id', 'ASC')->paginate(11);
    }
    return view('admin.users.index', compact('users'));
  }


  public function create()
  {
    $roles = Role::get();
    if (auth()->user()->hasRole('Super-Admin')) {
      $roles = Role::pluck('name', 'name')->all();
    } else {
      $roles = Role::pluck('name', 'name')->except(['name', 'Super-Admin']);
    }
    //get all hospital
    $hospitals = Hospital::all(); 
    return view('admin.users.create', compact('roles', 'hospitals'));
  }


  public function store(Request $request)
  { 
    if ((auth()->user()->hasRole('Super-Admin')) && (auth()->user()->hospital_id == null)) {
      $this->validate($request, [
        'first_name' => 'required',
        'last_name' => 'required',
        'username' => 'required',
        'email' => 'required|email|unique:users,email',
        'phone' => 'required',
        'email' => 'required|email|unique:users,email',
        'roles' => 'required',
        'hospital_id' => 'required',
      ]);
    } else if ((auth()->user()->hasRole('Super-Admin')) && (auth()->user()->hospital_id != null)) {
      $this->validate($request, [
        'first_name' => 'required',
        'last_name' => 'required',
        'username' => 'required',
        'email' => 'required|email|unique:users,email',
        'phone' => 'required',
        'email' => 'required|email|unique:users,email',
        'roles' => 'required',
      ]);
    }
    
    $input = $request->all();
    $randPwd = Str::random(8);
    $user = new User();
    $user->first_name = $request->first_name;
    $user->last_name = $request->last_name;
    $user->username = $request->username;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->password = $randPwd;
    if ((auth()->user()->hasRole('Super-Admin')) && (auth()->user()->hospital_id == null)) {
      $user->hospital_id = $request->hospital_id;
    } else if ((auth()->user()->hasRole('Super-Admin')) && (auth()->user()->hospital_id != null)) {
      $user->hospital_id = auth()->user()->hospital_id;
    }
    $user->save();

    $user->assignRole($request->input('roles'));

    Mail::to($request->email)->send(new NewAccount($user)); 
    //return index with create user successfully message
    $hashed_random_password = Hash::make($randPwd);
    $user->password=$hashed_random_password;
    $user->save();
    return redirect()->route('users.index')
      ->with('success', 'User created successfully');
  }

  public function show($id)
  {
    $admin = Auth::user();
    if ($admin -> hospital_id != null) {
      $user = User::find($id);
      if ($user->hospital_id != $admin->hospital_id) {
        return redirect()->route('users.index')
          ->with('error', 'This user is not under your administration');
      }
    } else {
      $user = User::find($id);
      $permissionNames = $user->getPermissionNames();
      return view('admin.users.show', compact('user', 'permissionNames'));
    }
    
  }

  public function edit($id)
  {
    $user = User::find($id);
    if ($user->hasRole('Super-Admin')) {
     return redirect()->route('users.index')
          ->with('error', 'This user is not under your administration');                
    }
    if (auth()->user()->hasRole('Super-Admin')) {
      $roles = Role::pluck('name', 'name')->all();
    } else {
      $roles = Role::pluck('name', 'name')->except(['name', 'Super-Admin']);
    }

    if (auth()->user()->hasRole('Super-Admin') && auth()->user()->hospital_id != null) {
      if ($user->hospital_id != auth()->user()->hospital_id) {
        return redirect()->route('users.index')
          ->with('error', 'This user is not under your administration');                
      }
    }

    $userRole = $user->roles->pluck('name', 'name')->all();

    return view('admin.users.edit', compact('user', 'roles', 'userRole'));
  }

  /**
   * Blocks a user with a given ID
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function block(Request $request, $id)
  {
    $user = User::find($id);
    $user->activated=!($user->activated);
    $user->save();
    $notification = array(
      'message' => "User updated successfully",
      'alert-type' => 'success'
    );
    return redirect()->route('users.index')->with($notification);
  }

  public function update(Request $request, $id)
  {
    $input = $request->all();
    if (!empty($input['password'])) {
      $input['password'] = Hash::make($input['password']);
    } else {
      $input = Arr::except($input, array('password'));
    }

    $user = User::find($id);
    $user->update($input);
    DB::table('model_has_roles')->where('model_id', $id)->delete();

    $user->assignRole($request->input('roles'));

    $notification = array(
      'message' => 'User updated successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('users.index')
      ->with('notif', $notification);
  }

  public function destroy($id)
  {
    $user = User::find($id);
    if (auth()->id() == $id) {
      $notification = array(
        'message' => "You cannot delete yourself",
        'alert-type' => 'error'
      );
      return redirect()->route('users.index')
        ->with('notif', $notification);
    }
    if ($user->hasRole('Super-Admin')) {
      $notification = array(
        'message' => "You have no permission for delete this user",
        'alert-type' => 'error'
      );
      return redirect()->route('users.index')
       ->with('notif', $notification);
    }

    if (auth()->user()->hospital_id != null) {
      if ($user->hospital_id != auth()->user()->hospital_id) {
        $notification = array(
          'message' => "You have no permission for delete this user",
          'alert-type' => 'error'
        );
        return redirect()->route('users.index')
          ->with('notif', $notification);
      }
    }
    $user->delete();
    $notification = array(
      'message' => "User deleted successfully",
      'alert-type' => 'success'
    );
    return redirect()->route('users.index')
      ->with('notif', $notification);
  }
}
