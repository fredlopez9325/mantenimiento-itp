<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Preventivo;
use App\periodo;

class PreventivoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $preventivos = Preventivo::where('user_id', \Auth::user()->id)->paginate(15);
        return view('preventivo.index', compact('preventivos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $periodos = periodo::orderBy('id','asc')->pluck('name', 'id');
        return view('preventivo.new', compact('periodos'));
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
            'semestre' => 'required',
            'periodo_id' => 'required',
        ]);

        $item = \Auth::user()->preventivos()->create($request->all());
        return redirect()->route('plan.index', $item->id)->with('success', 'Agregado Correctamente.');
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
        //
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
        $preventivo = Preventivo::findOrFail($id);
        if($preventivo->user_id == \Auth::user()->id) {
            $preventivo->delete();
            return redirect()->route('preventivo.index')->with('success', 'Eliminado Correctamente.');
        } else {
            return redirect()->route('preventivo.index')->with('error', 'No cuentas con los permisos necesarios.');
        }
    }
}
