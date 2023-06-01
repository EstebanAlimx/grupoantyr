<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreautosRequest;
use App\Http\Requests\UpdateautosRequest;
use App\Models\autos;
use App\Models\auto_por_locacion;

class AutosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return autos::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreautosRequest $request)
    {
        $auto = new autos;
        $auto->marca = $request->marca;
        $auto->modelo = $request->modelo;
        $auto->tipo = $request->tipo;

        $auto->save();
    }

    /**
     * Display the specified resource.
     * Use at filter
     */
    public function show(autos $autos)
    {
        // Marca, Modelo, Tipo (Camioneta, Auto)
        return autos::where('marca',$autos->id_auto)
                        ->get();

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateautosRequest $request, autos $autos)
    {
        $auto = autos::find($request->id_auto);
        $auto->marca = $request->marca;
        $auto->modelo = $request->modelo;
        $auto->tipo = $request->tipo;

        $auto->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(autos $autos)
    {
        $auto = autos::find($autos->id_auto);
        $auto->delete();
    }

    public function auto_por_locacion ( auto_por_locacion $auto_por_locacion) 
    {
        return auto_por_locacion::where('marca',$auto_por_locacion->id_auto_locacion)
                    ->get();
    }

    public function obtener_auto_por_filtro(autos $autos)
    {
        // Marca, Modelo, Tipo (Camioneta, Auto)
        return autos::where('marca',$autos->filter)
                        ->orwhere('modelo',$autos->filter)
                        ->orwhere('tipo',$autos->filter)
                        ->get();

    }
}
