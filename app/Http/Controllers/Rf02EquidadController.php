<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Rf02EquidadController extends Controller
{
    public function index()
{
    $empleados = DB::table('empleados as em')
    ->select(
        'pl.cve_tipo_contrato',
        'dp.centro_proceso_nomina',
        'dp.cve_periodo',
        'em.sexo',
        DB::raw("em.cve_tipo_empleado || '-' || te.descripcion as tipo_de_empleado"),
        DB::raw("pl.cve_area || '-' || ca.descripcion as area_de_adscripcion"),
        DB::raw("TRUNC(MONTHS_BETWEEN(SYSDATE, em.fecha_nacimiento) / 12) AS edad")
    )
    ->join('tipos_empleado as te', 'em.cve_tipo_empleado', '=', 'te.cve_tipo_empleado')
    ->join('plazas as pl', 'em.cve_empleado', '=', 'pl.cve_empleado')
    ->join('catalogo_areas as ca', 'pl.cve_area', '=', 'ca.cve_area_responsabilidad')
    ->join('detalles_de_pago as dp', 'em.cve_empleado', '=', 'dp.cve_empleado')
    ->where('em.fecha_nacimiento', '<=', DB::raw('SYSDATE'))
    ->distinct()
    ->paginate(20);

return view('pruebas', ['empleados' => $empleados]);


}


}
