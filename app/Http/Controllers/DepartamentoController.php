<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Departemento;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class DepartamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departamentos = Role::paginate(10);
        return view('departamentos.index', compact('departamentos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $selectedRoles = [];
        $permisos = Permission::all();
        return view('departamentos.new', compact('permisos', 'selectedRoles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required'
        ]);
        $departamento = Role::create($request->except('permisos'));
        if(count($request->permisos)) {
            foreach($request->permisos as $item) {
                $departamento->givePermissionTo($item);
            }
        }
        return redirect()->route('departamentos.index')->with('success', 'Agregado correctamento');
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
        $departamento = Role::find($id);
        $permisos = Permission::all();
        $selectedRoles = $departamento->getAllPermissions()->pluck('id')->toArray();
        return view('departamentos.edit', compact('departamento','permisos', 'selectedRoles'));
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
        $departamento = Role::find($id);
        if(count($departamento->getAllPermissions())) {
            foreach($departamento->getAllPermissions() as $item) {
                $departamento->revokePermissionTo($item);
            }
        }
        if(count($request->permisos)) {
            foreach($request->permisos as $item) {
                $departamento->givePermissionTo($item);
            }
        }
        $departamento->update($request->except('permisos'));
        return redirect()->route('departamentos.index')->with('success', 'Actualizado correctamento');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departamento = Role::find($id);
        $departamento->delete();
        return redirect()->route('departamentos.index')->with('info', 'Eliminado correctamento');
    }
}
