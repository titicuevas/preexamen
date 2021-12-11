<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class VuelosController extends Controller
{
    public function viaje(){

        $vuelos = DB::table('vuelos', 'v')
        ->join('aeropuerto AS a', 'origen_id', '=', 'a.id')
        ->join('aeropuerto AS ae', 'destino_id', '=', 'ae.id')
        ->join('companias AS c', 'compania_id', '=', 'c.id')
        ->select('v.*', 'a.denominacion as origen', 'ae.denominacion as destino', 'c.denominacion as compania' )
        ->get();
        //dd($vuelos);

        /*$paginador = $vuelos->paginate(2);
         $paginador->appends(compact(
            'codigo',
            'origen',
            'destino',
            'compania',
            'salida',
            'llegada',
            'plazas',
            'precio'
        ));*/
        return view('vuelos', ['vuelos' => $vuelos]);
    }
}
