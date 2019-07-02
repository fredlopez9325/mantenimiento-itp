<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correctivo;
use App\User;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CorrectivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $correctivos = Correctivo::where('user_id', \Auth::user()->id)->paginate(15);
        $solicitudes = Correctivo::where('role', \Auth::user()->role)->paginate(15);
        return view('correctivo.index', compact('correctivos', 'solicitudes'));
    }

    public function status($id)
    {
        $correctivo = Correctivo::findOrFail($id);
        $jefe_atiende = User::where('role', $correctivo->role)->first();
        if($jefe_atiende->id == Auth::user()->id) {
            $correctivo->status = 1;
            $correctivo->save();
            return redirect()->route('correctivo.index')->with('success', 'Información actualizada.');
        } else {
            return redirect()->route('correctivo.index')->with('error', 'Permisos denegados.');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Role::pluck('name', 'name');
        return view('correctivo.new', compact('departamentos'));
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
            'role' => 'required',
            'descripcion' => 'required',
        ]);
        $correctivo = \Auth::user()->correctivo()->create($request->all());
        $correctivo->folio = "MC000".$correctivo->id;
        $correctivo->save();
        return redirect()->route('correctivo.index')->with('success', 'Agregado correctamento');
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
        return view('correctivo.edit');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
