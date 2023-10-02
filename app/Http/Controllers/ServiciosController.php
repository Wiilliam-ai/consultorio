<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
    public function listCategorias(){
        $categorias = DB::table('cita')
                          ->join('categoria','cita.id_categoria','=','categoria.id_categoria')
                          ->select('nombre_categoria',DB::raw('COUNT(id_cita) as cantidad'))
                          ->groupBy('nombre_categoria')
                          ->get();
        return $categorias;
    }

    public function listEspecialistas(){

        $especialistas = DB::table('cita')
                            ->join('paciente','cita.id_paciente','=','paciente.id_paciente')
                            ->select(DB::raw('CONCAT(nombre," ",apellido_paterno," ",apellido_materno) as nombre'),DB::raw('COUNT(dni) as cantidad'))
                            ->groupBy('nombre','apellido_paterno','apellido_materno')
                            ->limit(3)
                            ->orderBy('cantidad','desc')
                            ->get();
        return $especialistas;
    }
}
