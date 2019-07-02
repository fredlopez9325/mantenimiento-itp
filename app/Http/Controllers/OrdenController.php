<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Correctivo;
use App\Mantenimiento;

class OrdenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($correctivo_id)
    {
        $correctivo = Correctivo::findOrFail($correctivo_id);
        return view('mantenimiento.create', compact('correctivo'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $correctivo_id)
    {
        $correctivo = Correctivo::findOrFail($correctivo_id);
        $mantenimiento = Mantenimiento::create([
            'numero_control' => $request->numero_control,
            'mantenimiento' => $request->mantenimiento,
            'tipo_servicio' => $request->tipo_servicio,
            'asignado_a' => $request->asignado_a,
            'trabajo_realizado' => $request->trabajo_realizado,
            'verificado' => $request->verificado,
            'correctivo_id' => $correctivo->id
        ]);
        return redirect()->route('correctivo.index')->with('success', 'Orden creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $correctivo = Correctivo::findOrFail($correctivo_id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, $correctivo_id)
    {
        $correctivo = Correctivo::findOrFail($correctivo_id);
        $orden = Mantenimiento::findOrFail($id);
        return view('mantenimiento.edit', compact('correctivo', 'orden'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, $correctivo_id)
    {
        $correctivo = Correctivo::findOrFail($correctivo_id);
        $orden = Mantenimiento::findOrFail($id);
        $orden->update($request->all());
        return redirect()->route('correctivo.index')->with('success', 'Orden actualizada.');
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
