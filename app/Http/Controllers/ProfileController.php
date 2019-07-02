<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(15);
        return view('profiles.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Role::pluck('name', 'id');
        return view('profiles.new', compact('departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = Role::find($request->role);

        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required',
            'name' => 'required',
        ]);
        $user = User::create([
            'email' => $request->email,
            'role' => $role->name,
            'password' => \Hash::make($request->password),
            'name' => $request->name
        ]);
        $user->assignRole($role);
        return redirect()
            ->route('profiles.index')
            ->with('success', 'Agregado correctamento');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $departamentos = Role::pluck('name', 'id');
        $user = User::find($id);
        return view('profiles.edit', compact('user', 'departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Role::find($request->role);

        $request->validate([
            'email' => 'required',
            'name' => 'required',
        ]);
        
        $user = User::find($id);

        if($role->name !== $user->role) {
            $user->revokePermissionTo($user->role);
            $user->assignRole($role);
        } 

        if (isset($user->role)) {
            $user->assignRole($role);
        }

        if ($request->password) {
            $user->update([
                'email' => $request->email,
                'role' => $role->name,
                'password' => Hash::make($request->password),
                'name' => $request->name
            ]);
            
            return redirect()->route('profiles.index')->with('success', 'Actualizado correctamento');
        } else {
            $user->update([
                'email' => $request->email,
                'role' => $role->name,
                'name' => $request->name
            ]);
            return redirect()->route('profiles.index')->with('success', 'Actualizado correctamento');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('profiles.index')->with('info', 'Eliminado correctamento');
    }
}
