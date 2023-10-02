@extends('layouts.app')
@section('title','Contacto')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mensajes de la <span class="text-blue-700">Pagina</span></h1>
<div>
    <table id="tabla-cita" class="table w-full">
        <thead class="bg-blue-500 text-white">
          <tr>
            <th class="p-2 text-2xl">Contacto</th>
            <th class="p-2 text-2xl">Mensaje</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($contactos as $contacto)
                <tr class="border-b-2 border-t-2 border-black text-start">
                    <td class="border-r-2 border-black">
                        <p class="font-bold">Nombre: <span class="font-normal">{{$contacto->nombre}}</span></p>
                        <p class="font-bold">Telefono: <span class="font-normal">{{$contacto->telefono}}</span></p>
                        <p class="font-bold">Correo: <span class="font-normal">{{$contacto->correo}}</span></p>
                        <form action="{{route('correos.destroy',$contacto->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-600 font-semibold transition-all hover:text-black" 
                                    type="submit">Eliminar</button>
                        </form>
                    </td>
                    <td>
                        {{$contacto->mensaje}}
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection
@section('scripts')
 @vite('resources/js/tables.js')
@endsection