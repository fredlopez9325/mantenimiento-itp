<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Infraestructura;
use App\User;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class InfraestructuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $formatos = Infraestructura::where('user_id', \Auth::user()->id)->paginate(15);
      $solicitudes = Infraestructura::where('role', \Auth::user()->role)->paginate(15);
      return view('infraestructura.index', compact('formatos', 'solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departamentos = Role::pluck('name', 'name');
        return view('infraestructura.new', compact('departamentos'));
    }

    public function status($id)
    {
        $infraestructura = Infraestructura::findOrFail($id);
        $jefe_atiende = User::where('role', $infraestructura->role)->first();
        if($jefe_atiende->id == Auth::user()->id) {
            $infraestructura->status = 1;
            $infraestructura->save();
            return redirect()->route('infraestructura.index')->with('success', 'Información actualizada.');
        } else {
            return redirect()->route('infraestructura.index')->with('error', 'Permisos denegados.');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $infraestructura = \Auth::user()->infraestructura()->create($request->all());
        $infraestructura->folio = 'MI000'.$infraestructura->id;
        $infraestructura->save();
        return redirect()->route('infraestructura.index')->with('success', 'Agregado correctamento');
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

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
