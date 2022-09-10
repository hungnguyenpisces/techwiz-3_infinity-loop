<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;
//use redirect
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:user-list|user-create|user-edit|user-delete', ['only' => ['index', 'store']]);
        $this->middleware('permission:user-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:user-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:user-delete', ['only' => ['destroy']]);
    }
    public function index(Request $request)
    {

        $users = User::orderBy('id', 'ASC')->paginate(11);

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
        return view('admin.users.create', compact('roles'));
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
            'confirm-password' => 'required|same:password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        $notification = array(
            'message' => 'User created successfully',
            'alert-type' => 'success'
        );
        return redirect()->route('users.index')
            ->with($notification);
    }

    public function show($id)
    {
        $user = User::find($id);
        $permissionNames = $user->getPermissionNames();
        return view('admin.users.show', compact('user', 'permissionNames'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        if ($user->hasRole('Super-Admin')) {
            $notification = array(
                'message' => "You have no permission for edit this user",
                'alert-type' => 'error'
            );
            return redirect()->route('users.index')
                ->with($notification);
        }
        if (auth()->user()->hasRole('Super-Admin')) {
            $roles = Role::pluck('name', 'name')->all();
        } else {
            $roles = Role::pluck('name', 'name')->except(['name', 'Super-Admin']);
        }
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('admin.users.edit', compact('user', 'roles', 'userRole'));
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
            ->with($notification);
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
                ->with($notification);
        }
        if ($user->hasRole('Super-Admin')) {
            $notification = array(
                'message' => "You have no permission for delete this user",
                'alert-type' => 'error'
            );
            return redirect()->route('users.index')
                ->with($notification);
        }
        $user->delete();
        $notification = array(
            'message' => "User deleted successfully",
            'alert-type' => 'success'
        );
        return redirect()->route('users.index')
            ->with($notification);
    }

    public function login() {
        $user = Auth::user();
        if ($user == null) {
            return view('web.login');
        } else {
            if ($user->hasRole(['Super-Admin', 'Admin'])) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('index');
            }
        }
    }


    public function processLogin(LoginRequest $request)
    {
        $credentials = $request->getCredentials();
  
        if (Auth::attempt($credentials)) {
            $user = Auth::getProvider()->retrieveByCredentials($credentials);
            Auth::login($user);
            $token=auth('api')->setTTL(240)->attempt($credentials);
            $resToken=[
                'token'=>$token,
                'token_type'=>'bearer',
                'expires_in'=>auth('api')->factory()->getTTL()*60*4
            ];
            return Redirect::route('index')->with('token', $resToken);
        }
        else {
            return Redirect::route('login.show')->with('error', 'Invalid Credentials');
        }
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return Redirect::route('login.show');
    }

    // public function refresh() {
    //     return $this->respondWithToken(auth()->refresh());
    // }

    // public function respondWithToken($token) {
    //     return response()->json([
    //         'access_token' => $token,
    //         'token_type' => 'bearer',
    //         'expires_in' => auth()->factory()->getTTL() * 60 * 4
    //     ]);
    // }
}
