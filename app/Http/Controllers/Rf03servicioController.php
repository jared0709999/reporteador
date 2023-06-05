<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Rf03servicioController extends Controller
{
    public function index()
    {
        $resultado = DB::table('motivos as mt')
    ->select(
        DB::raw("p.cve_tipo_motivo || '-' || mt.descripcion as motivo_movimiento"),
        DB::raw("tss.cve_tipo_servicio_social || '-' || tss.descripcion as tipo_de_servicio"),
        'dgn.cve_tabulador',
        DB::raw("ddp.cve_periodo || '-' || pn.descripcion as periodo")
    )
    ->join('plazas as p', 'mt.cve_tipo_motivo', '=', 'p.cve_tipo_motivo')
    ->join('detalles_grados_niveles as dgn', 'dgn.cve_nivel', '=', 'p.cve_nivel')
    ->join('tipos_servicios_sociales as tss', 'tss.activo', '=', 'dgn.activo')
    ->join('detalles_de_pago as ddp', 'p.cve_plaza', '=', 'ddp.cve_plaza')
    ->join('periodos_nomina as pn', 'ddp.cve_periodo', '=', 'pn.cve_periodo')
    ->paginate(20);

return view('pruebas3', ['resultado' => $resultado]);

    }
}
