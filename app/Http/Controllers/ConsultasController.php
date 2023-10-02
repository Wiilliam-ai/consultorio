<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConsultasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $consultas = DB::table('consulta')
                        ->join('paciente','consulta.id_paciente','=','paciente.id_paciente')
                        ->select(['id_consulta',
                                  'nombre',
                                  'apellido_paterno',
                                  'apellido_materno',
                                  'fecha',
                                  'motivo',
                                  'tiempo'])
                        ->get();
       return view('admin.consultas.list',['consultas'=>$consultas]);
    }

    public function create(){

        return view('admin.consultas.create');
    }

    public function store(Request $request){
        DB::table('consulta')->insert([
            'id_paciente'=>$request->input('paciente'),
            'fecha'=>$request->input('fecha'),
            'motivo'=>$request->input('motivo'),
            'tiempo'=>$request->input('tiempo'),
        ]);
        return to_route('consultas');
    }
    
    public function destroy($id){
        $deleteConsulta = DB::table('consulta')
                              ->where('id_consulta','=',$id)
                              ->delete();
        return to_route('consultas');
    }

    public function edit($id){
        $consulta = DB::selectOne('select * from consulta where id_consulta=?',[$id]);
        return view('admin.consultas.edit',['consulta'=>$consulta]);
    }
    public function update(Request $request,$id){
        $deleteConsulta = DB::table('consulta')
                              ->where('id_consulta','=',$id)
                              ->update([
                                'id_paciente'=>$request->input('paciente'),
                                'fecha'=>$request->input('fecha'),
                                'motivo'=>$request->input('motivo'),
                                'tiempo'=>$request->input('tiempo'),
                              ]);
        return to_route('consultas');
    }
}
