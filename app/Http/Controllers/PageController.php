<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use App\Models\Evento;
use App\Models\Paquete;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){
        return view('index');
    }

    public function eventosView(){
        $eventos = Evento::get();
        return view('eventos',['eventos'=>$eventos]);
    }

    public function showEvent($id){
        $evento = Evento::find($id);
        return view('evento',['evento'=>$evento]);
    }
    public function paquetesView(){
        $paquetes = Paquete::get();
        return view('paquetes',['paquetes'=>$paquetes]);
    }
    public function nosotrosView(){
        return view('nosotros');
    }
    public function contactoView(){
        return view('contacto');
    }

    public function store(Request $request){
        $contacto = new Contacto();
        $contacto->nombre = $request->input('nombre');
        $contacto->telefono = $request->input('telefono');
        $contacto->correo = $request->input('correo');
        $contacto->mensaje = $request->input('mensaje');
        $contacto->save();
        session()->flash('status','Mensaje envado');
        return to_route('contact');
    }
}
