<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
  public function index(Request $request)
  {
    $roles = Role::all();
    return view('admin.roles.index', compact('roles'));
  }

  public function create()
  {
    $permission = Permission::get();
    return view('admin.roles.create', compact('permission'));
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|unique:roles,name',
      'permission' => 'required',
    ]);

    $role = Role::create(['name' => $request->input('name')]);
    $role->syncPermissions($request->input('permission'));

    $request->session()->flash('success', 'Role created successfully');

    return redirect()->route('roles.index');
  }

  public function show($id)
  {
    $role = Role::find($id);
    $rolePermissions = Permission::join("role_has_permissions", "role_has_permissions.permission_id", "=", "permissions.id")
      ->where("role_has_permissions.role_id", $id)
      ->get();

    return view('admin.roles.show', compact('role', 'rolePermissions'));
  }

  public function edit($id)
  {
    $role = Role::find($id);
    if ($role->name == 'Super-Admin') {
      $notification = array(
        'message' => "You have no permission for edit this role",
        'alert-type' => 'error'
      );
      return redirect()->route('roles.index')
        ->with($notification);
    }

    $permission = Permission::get();
    $rolePermissions = DB::table("role_has_permissions")->where("role_has_permissions.role_id", $id)
      ->pluck('role_has_permissions.permission_id', 'role_has_permissions.permission_id')
      ->all();

    return view('admin.roles.edit', compact('role', 'permission', 'rolePermissions'));
  }

  public function update(Request $request, $id)
  {
    $this->validate($request, [
      'name' => [
        'required',
        Rule::unique('roles', 'name')->ignore($id)
      ],
      'permission' => 'required'
    ]);

    $role = Role::find($id);
    $role->name = $request->input('name');
    $role->save();

    $role->syncPermissions($request->input('permission'));

    $request->session()->flash('success', 'Role updated successfully');
    return redirect()->route('roles.index');
  }

  public function destroy($id)
  {
    $role = Role::find($id);

    if (auth()->user()->roles->find($id)) {
      $notification = array(
        'message' => 'You have no permission for delete this role',
        'alert-type' => 'error'
      );
      return redirect()->route('roles.index')
        ->with($notification);
    }
    if ($role->name == "Super-Admin") {
      $notification = array(
        'message' => 'You have no permission for delete Super-Admin role',
        'alert-type' => 'error'
      );
      return redirect()->route('roles.index')
        ->with($notification);
    }
    $role->delete();

    $notification = array(
      'message' => 'The role deleted successfully',
      'alert-type' => 'success'
    );
    return redirect()->route('roles.index')
      ->with($notification);
  }
}
