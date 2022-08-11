<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    function __construct()
    {

        $this->middleware('role:Super-Admin|Admin');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // $permissions = Permission::all();
        $permissions = Permission::orderBy('id', 'DESC')->paginate(7);
        return view('admin.permissions.index', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return redirect()->route('permissions.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|unique:permissions',
        ]);

        if (Auth::user()->hasRole('Super-Admin')) {
            $permission = Permission::create(['name' => $request->input('name')]);
            $permission->assignRole('Super-Admin');
            $request->session()->flash('success', 'Permission created successfully');
            return redirect()->route('permissions.index');
        } else {
            $request->session()->flash('error', 'You do not have permission to create permission');
            return redirect()->route('permissions.index');
        }
        return redirect('/403');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return redirect()->route('permissions.index');
    }

    public function edit($id)
    {
        return redirect()->route('permissions.index');
    }

    public function update()
    {
        return redirect()->route('permissions.index');
    }

    public function destroy(Request $request, $id)
    {
        $permission = Permission::findOrFail($id);
        if (Auth::user()->hasRole('Super-Admin')) {
            $permission->delete();
            $request->session()->flash('success', 'Permission deleted successfully');
            return redirect()->route('permissions.index');
        } else {
            $request->session()->flash('error', 'You do not have permission to delete permission');
            return redirect()->route('permissions.index');
        }
        return redirect('/403');
    }
}
