<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:read role', only: ['index']),
            new Middleware('permission:update role', only: ['edit']),
            new Middleware('permission:create role', only: ['create']),
            new Middleware('permission:delete role', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::orderBy('name')->paginate(10);

        return view('role.list', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $premissions = Permission::orderBy('name')->get();

        // return view('role.create', compact('premission'));
        return view('role.create', ['premissions' => $premissions]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:255|unique:roles,name',

        ], [
            'name.required' => 'The role name is required.',
            'name.max' => 'The role name must not be more than 255 characters.',
            'name.min' => 'The role name must be at least 2 characters.',
            'name.unique' => 'This role already exists.',
        ]);

        if ($validator->passes()) {
            $role = Role::create(['name' => $request->name]);

            if (! empty($request->permission)) {
                foreach ($request->permission as $name) {
                    $role->givePermissionTo($name);
                }
            }

            return redirect()->route('role.create')
                ->with('success', 'Role added successfully.');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $roles = Role::findOrFail($id);
        $hasPermissions = $roles->permissions->pluck('name');
        $permissions = Permission::orderBy('name')->get();

        return view('role.edit', compact('roles', 'hasPermissions', 'permissions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $roles = Role::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|unique:permissions,name,'.$id.',id',
        ], [
            'name.required' => 'The permission name is required.',
            'name.min' => 'The permission name must be at least 2 characters.',
            'name.unique' => 'This permission already exists.',
        ]);

        if ($validator->passes()) {
            $roles->name = $request->name;
            $roles->update();

            if (! empty($request->permission)) {
                $roles->syncPermissions($request->permission);
            } else {
                $roles->syncPermissions([]);
            }

            return redirect()->route('role.index')
                ->with('success', 'Role Updated successfully.');
        } else {
            return redirect()->back()
                ->withInput()
                ->withErrors($validator);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $role = Role::findOrFail($id);

        if ($role == null) {
            session()->flash('error', 'Permission not found.');

            return response()->json([
                'status' => false,
            ]);
        }

        $role->delete();

        session()->flash('success', 'Permission deleted successfully.');

        return response()->json([
            'status' => true,
        ]);
    }
}
