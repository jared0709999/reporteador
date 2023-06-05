<?php

namespace App\Http\Controllers;

use App\Models\rf01;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Rf01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados= DB::table('tipos_empleado')
                    ->select(DB::raw("cve_tipo_empleado || '-' || descripcion AS concatenar" ))
                    ->orderBy('concatenar', 'asc')
                    ->get();

        $periodos= DB::table('periodos_nomina')
                    ->select(DB::raw("cve_periodo || '-' || descripcion AS concatenar1" ))
                    ->orderBy('concatenar1', 'asc')
                    ->get();
        
        $cpns= DB::select('SELECT DISTINCT centro_proceso_nomina from detalles_de_pago');

        $plazas= DB::select('SELECT DISTINCT cve_tipo_contrato from plazas');
        
        return view('rf01.index') -> with (['empleados'=>$empleados, 'periodos'=>$periodos, 'cpns'=>$cpns, 'plazas'=>$plazas]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\rf01  $rf01
     * @return \Illuminate\Http\Response
     */
    public function show(rf01 $rf01)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rf01  $rf01
     * @return \Illuminate\Http\Response
     */
    public function edit(rf01 $rf01)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rf01  $rf01
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rf01 $rf01)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rf01  $rf01
     * @return \Illuminate\Http\Response
     */
    public function destroy(rf01 $rf01)
    {
        //
    }
}
