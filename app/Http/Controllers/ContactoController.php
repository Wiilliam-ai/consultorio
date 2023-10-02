<?php

namespace App\Http\Controllers;

use App\Models\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $contactos = Contacto::orderBy('id','desc')->get();
        return view('admin.contacto.list',['contactos'=>$contactos]);
    }

    public function destroy($id){
        $contacto = Contacto::find($id);
        $contacto->delete();
        return to_route('correos');
    }
}
