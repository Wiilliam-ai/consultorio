<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $pacientes = DB::select('SELECT * FROM view_lista_pacientes');
        return view('admin.pacientes.list',['pacientes'=>$pacientes]);
    }
    public function show($id){
        $paciente = DB::selectOne('SELECT * FROM paciente WHERE id_paciente = ?',[$id]);
        $citas = DB::select("CALL sp_listCitasPaciente(?)",[$id]);
        return view('admin.pacientes.show',['paciente'=>$paciente,'citas'=>$citas]);
    }

    public function create()
    {
        return view('admin.pacientes.create');
    }

    public function store(Request $request){

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'img/pacientes/';
            $filname = $request->input('dni').'-'.$file->getClientOriginalName();
            $uploadSucces = $request->file('imagen')->move($destinationPath,$filname);
        }
        
        DB::table('paciente')->insert(
            [
                'dni' => $request->input('dni'),
                'apellido_paterno' => $request->input('apellidoP'),
                'apellido_materno' => $request->input('apellidoM'),
                'nombre' => $request->input('nombre'),
                'fecha_nacimiento' => $request->input('fecha'),
                'img' => $destinationPath.$filname,
                'id_estado' => 1,
                'correo' => $request->input('correo'),
                'clave' => 777777,
                'telefono' => $request->input('telefono'),
            ]
        );

        return to_route('pacientes');
    }

    public function edit($id){
        /*
        if(File::exists($image_path)){
        }*/

        $paciente = DB::selectOne("CALL sp_objPaciente(?)",[$id]);
        return view('admin.pacientes.edit',[
            'paciente'=>$paciente
        ]);
    }

    public function update(Request $request,$id){
        $paciente = DB::selectOne("CALL sp_objPaciente(?)",[$id]);
        if ($request->hasFile('imagen')) {
            
            if(File::exists($paciente->img)){
                unlink($paciente->img);
            }

            $file = $request->file('imagen');
            $destinationPath = 'img/pacientes/';
            $filname = time().'-'.$file->getClientOriginalName();
            $uploadSucces = $request->file('imagen')->move($destinationPath,$filname);

            DB::update('update paciente set 
                        img=? where id_paciente = ?',
                        [
                            $destinationPath.$filname,
                            $id
                        ]
            );
        }

        DB::update('update paciente set dni=?,
                    apellido_paterno=?,
                    apellido_materno=?,
                    nombre=?,
                    fecha_nacimiento=?,
                    correo=?,
                    telefono=? where id_paciente = ?',
                    [
                        $request->input('dni'),
                        $request->input('apellidoP'),
                        $request->input('apellidoM'),
                        $request->input('nombre'),
                        $request->input('fecha'),
                        $request->input('correo'),
                        $request->input('telefono'),
                        $id
                    ]
        );


        return to_route('pacientes');
    }
}
