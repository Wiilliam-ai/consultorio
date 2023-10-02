<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CitaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $citas = DB::select('SELECT * FROM view_lista_citas');
        return view('admin.citas.list',['citas'=>$citas]);
    }

    public function create()
    {
        // $especialistas = DB::select('SELECT * FROM view_especialista_form');
        $especialistas = DB::table('especialista')->where('id_estado',1)->get();
        $categorias = DB::select('SELECT * FROM view_categoria_form');

        return view('admin.citas.create',[
        'especialistas'=>$especialistas,
        'categorias'=>$categorias
        ]);
    }

    public function store(Request $request){
        DB::table('cita')->insert(
            [
                'id_especialista' => $request->input('especialista'),
                'id_paciente' => $request->input('paciente'),
                'id_estado' => 3,
                'id_categoria' => $request->input('categoria'),
                'descripcion' => $request->input('descripcion'),
                'fecha' => $request->input('fecha')
            ]
        );
        return to_route('citas');
    }

    public function delete($id){
        DB::delete("DELETE FROM cita WHERE id_cita = ?",[$id]);
        return to_route('citas');
    }

    public function edit($id){
        $cita = DB::selectOne("SELECT * FROM cita WHERE id_cita = ?",[$id]);
        $especialistas = DB::table('especialista')->where('id_estado',1)->get();
        $categorias = DB::select('SELECT * FROM view_categoria_form');

        return view('admin.citas.edit',[
        'especialistas'=>$especialistas,
        'categorias'=>$categorias,
        'cita'=> $cita
        ]);
    }

    public function update(Request $request,$id){
        DB::table('cita')->where('id_cita',$id)->update(            [
            'id_especialista' => $request->input('especialista'),
            'id_paciente' => $request->input('paciente'),
            'id_estado' => 3,
            'id_categoria' => $request->input('categoria'),
            'descripcion' => $request->input('descripcion'),
            'fecha' => $request->input('fecha')
        ]);
        return to_route('citas');
    }
}
