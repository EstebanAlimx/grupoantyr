<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorelocacionesRequest;
use App\Http\Requests\UpdatelocacionesRequest;
use App\Models\locaciones;

class LocacionesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return locaciones::get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorelocacionesRequest $request)
    {
        $locacion = new locaciones;
        $locacion->nombre = $request->nombre;
        $locacion->descripcion = $request->descripcion;
        $locacion->municipio = $request->municipio;

        $locacion->save();
    }

    /**
     * Display the specified resource.
     * Use filters
     */
    public function show(locaciones $locaciones)
    {
        return locaciones::where('marca',$locaciones->id_locacion)
               ->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(locaciones $locaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatelocacionesRequest $request, locaciones $locaciones)
    {
        $locacion = locaciones::find($request->id_locacion);
        $locacion->nombre = $request->nombre;
        $locacion->marca = $request->marca;
        $locacion->municipio = $request->municipio;

        $locacion->save();   
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(locaciones $locaciones)
    {
        $locacion = locaciones::find($locaciones->id_locacion);
        $locacion->delete();
    }
}
