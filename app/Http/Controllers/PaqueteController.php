<?php

namespace App\Http\Controllers;

use App\Models\Paquete;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class PaqueteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $paquetes = Paquete::get();
        return view('admin.paquetes.list',[
            'paquetes'=>$paquetes
        ]);
    }
    public function create(){
        return view('admin.paquetes.create');
    }

    public function store(Request $request){
        $paquete = new Paquete();

        if ($request->hasFile('imagen')) {
            $file = $request->file('imagen');
            $destinationPath = 'img/paquetes/';
            $filname = time().'-'.$file->getClientOriginalName();
            $uploadSucces = $request->file('imagen')->move($destinationPath,$filname);
            $paquete->img = $destinationPath.$filname;
        }

        $paquete->nombre = $request->input('nombre');
        $paquete->precio = $request->input('precio');
        $paquete->descripcion = $request->input('descripcion');
        $paquete->save();
        return to_route('paquetes');
    }

    public function delete($id){
        $paquete = Paquete::find($id);
        if (File::exists($paquete->img)) {
            unlink($paquete->img);
        }
        $paquete->delete();
        return to_route('paquetes');
    }

    public function edit($id){
        $paquete = Paquete::find($id);
        return view('admin.paquetes.edit',[
            'paquete'=>$paquete
        ]);
    }

    public function update(Request $request,$id){
        $paquete = Paquete::find($id);

        if ($request->hasFile('imagen')) {
            
            unlink($paquete->img);

            $file = $request->file('imagen');
            $destinationPath = 'img/paquetes/';
            $filname = time().'-'.$file->getClientOriginalName();
            $uploadSucces = $request->file('imagen')->move($destinationPath,$filname);
            $paquete->img = $destinationPath.$filname;
        }

        $paquete->nombre = $request->input('nombre');
        $paquete->precio = $request->input('precio');
        $paquete->descripcion = $request->input('descripcion');
        $paquete->save();
        return to_route('paquetes');
    }
}
