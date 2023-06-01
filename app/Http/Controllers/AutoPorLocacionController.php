<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeauto_por_locacionRequest;
use App\Http\Requests\Updateauto_por_locacionRequest;
use App\Models\auto_por_locacion;
use Illuminate\Support\Facades\DB;

class AutoPorLocacionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $query =  DB::table('auto_por_locacion')::join('autos', 'auto_por_locacion.id_auto', '=', 'autos.id_auto')
                                 ->join('locaciones', 'auto_por_locacion.id_locacion', '=', 'locaciones.id_locacion');
        
        return response()->json($query);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storeauto_por_locacionRequest $request)
    {
        $auto = new auto_por_locacion;
        $auto->id_auto = $request->id_auto;
        $auto->id_locacion = $request->id_locacion;

        $auto->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(auto_por_locacion $auto_por_locacion)
    {
        return auto_por_locacion::where('id_auto_locacion',$auto_por_locacion->id_auto_locacion)
                        ->get();
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(auto_por_locacion $auto_por_locacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Updateauto_por_locacionRequest $request, auto_por_locacion $auto_por_locacion)
    {
        $auto = auto_por_locacion::find($request->id_auto_locacion);
        $auto->id_auto = $request->id_auto;
        $auto->id_locacion = $request->id_locacion;

        $auto->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(auto_por_locacion $auto_por_locacion)
    {
        $auto = auto_por_locacion::find($auto_por_locacion->id_auto_locacion);
        $auto->delete();
    }
}
