<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller implements HasMiddleware
{
    public static function middleware(): array
    {
        return [
            new Middleware('permission:read permission', only: ['index']),
            new Middleware('permission:update permission', only: ['edit']),
            new Middleware('permission:create permission', only: ['create']),
            new Middleware('permission:delete permission', only: ['destroy']),
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $permissions = Permission::all();
        $permissions = Permission::orderBy('created_at', 'desc')->paginate(10);

        return view('permissions.list', compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255|min:2|unique:permissions,name',
        ], [
            'name.required' => 'The permission name is required.',
            'name.string' => 'The permission name must be a string.',
            'name.max' => 'The permission name must not be more than 255 characters.',
            'name.min' => 'The permission name must be at least 2 characters.',
            'name.unique' => 'This permission already exists.',
        ]);

        if ($validator->passes()) {
            Permission::create(['name' => $request->name]);

            // return redirect()->route('permissions.create')
            return redirect()->back()
                ->with('success', 'Permission created successfully.');
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
        $permission = Permission::findOrFail($id);

        return view('permissions.edit', compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $permission = Permission::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|unique:permissions,name,'.$id.',id',
        ], [
            'name.required' => 'The permission name is required.',
            'name.min' => 'The permission name must be at least 2 characters.',
            'name.unique' => 'This permission already exists.',
        ]);

        if ($validator->passes()) {
            $permission->name = $request->name;
            $permission->update();

            return redirect()->route('permissions.index')
                ->with('success', 'Permission Updated successfully.');
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
        $permission = Permission::findOrFail($id);

        if ($permission == null) {
            session()->flash('error', 'Permission not found.');

            return response()->json([
                'status' => false,
            ]);
        }

        $permission->delete();

        session()->flash('success', 'Permission deleted successfully.');

        return response()->json([
            'status' => true,
        ]);

        // return redirect()->route('permissions.index')->with('success', 'Permission deleted successfully.');
    }
}
