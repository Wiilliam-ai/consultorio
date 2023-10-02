<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $eventos = Evento::get();
        return view('admin.eventos.list',['eventos'=>$eventos]);
    }

    public function create(){
        return view('admin.eventos.create');
    }

    public function store(Request $request){
        $evento = new Evento();
        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'img/eventos/';
            $filname = time().'-'.$file->getClientOriginalName();
            $uploadSucces = $request->file('imagen')->move($destinationPath,$filname);
            $evento->img = $destinationPath.$filname;
        }

        $evento->titulo = $request->input('titulo');
        $evento->fecha = $request->input('fecha');
        $evento->descripcion = $request->input('descripcion');
        $evento->save();
        return to_route('eventos');
    }

    public function edit($id){
        $evento = Evento::find($id);
        return view('admin.eventos.edit',['evento'=>$evento]);
    }

    public function update(Request $request,$id){
        $evento = Evento::find($id);

        if ($request->hasFile('imagen')) {
            
            if(File::exists($evento->img)){
                unlink($evento->img);
            }

            $file = $request->file('imagen');
            $destinationPath = 'img/eventos/';
            $filname = time().'-'.$file->getClientOriginalName();
            $uploadSucces = $request->file('imagen')->move($destinationPath,$filname);
            $evento->img = $destinationPath.$filname;
        }
        
        $evento->titulo = $request->input('titulo');
        $evento->fecha = $request->input('fecha');
        $evento->descripcion = $request->input('descripcion');
        $evento->save();
        return to_route('eventos');
    }

    public function destroy($id){
        $evento = Evento::find($id);
        if(File::exists($evento->img)){
            unlink($evento->img);
        }
        $evento->delete();
        return to_route('eventos');
    }
}
