<?php

namespace App\Http\Controllers;

use App\Models\rf03;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Rf03Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $motivos= DB::table('motivos')
                    ->select(DB::raw("cve_tipo_motivo || '-' || descripcion AS concatenar" ))
                    ->orderBy('concatenar', 'asc')
                    ->get();
        
        $servicios= DB::table('tipos_servicios_sociales')
                    ->select(DB::raw("cve_tipo_servicio_social || '-' || descripcion AS concatenar1" ))
                    ->orderBy('concatenar1', 'asc')
                    ->get();

        $tabuladores= DB::select('SELECT DISTINCT cve_tabulador from detalles_grados_niveles');
        
        return view('rf03.index')-> with (['motivos'=>$motivos, 'servicios'=>$servicios, 'tabuladores'=>$tabuladores]);
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
     * @param  \App\Models\rf03  $rf03
     * @return \Illuminate\Http\Response
     */
    public function show(rf03 $rf03)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\rf03  $rf03
     * @return \Illuminate\Http\Response
     */
    public function edit(rf03 $rf03)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\rf03  $rf03
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rf03 $rf03)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\rf03  $rf03
     * @return \Illuminate\Http\Response
     */
    public function destroy(rf03 $rf03)
    {
        //
    }
}
