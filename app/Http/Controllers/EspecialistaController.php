<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EspecialistaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $especialistas = DB::table('especialista')->get();
        return view('admin.especialistas.list',['especialistas'=>$especialistas]);
    }
    public function create(){
        return view('admin.especialistas.create');
    }

    public function store(Request $request){

        DB::table('especialista')->insert([
            'apellido_paterno' => $request->input('apellidoP'),
            'apellido_materno' => $request->input('apellidoM'),
            'nombre' => $request->input('nombre'),
            'fecha_nacimiento' => $request->input('fecha'),
            'id_estado' => $request->input('estado'),
            'istitucion' => $request->input('institucion')
        ]);
        return to_route('especialistas');
    }

    public function edit($id){
        $especialista = DB::selectOne('SELECT * FROM especialista WHERE id_especialista=?',[$id]);
        return view('admin.especialistas.edit',['especialista'=>$especialista]);
    }

    public function update(Request $request,$id){
        DB::table('especialista')->where('id_especialista',$id)->update([
            'apellido_paterno' => $request->input('apellidoP'),
            'apellido_materno' => $request->input('apellidoM'),
            'nombre' => $request->input('nombre'),
            'fecha_nacimiento' => $request->input('fecha'),
            'id_estado' => $request->input('estado'),
            'istitucion' => $request->input('institucion')
        ]);
        return to_route('especialistas');
    }
}
