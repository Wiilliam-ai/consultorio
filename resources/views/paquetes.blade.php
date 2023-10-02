@extends('layouts.public')
@section('contenido')
<div class="p-2 max-w-7xl mx-auto">
    <h2 class="font-bold text-xl my-3">Conoce todos nuestros paquetes a detalle</h2>

    <div class="flex flex-col gap-3">
        @foreach ($paquetes as $paquete)
            <div class="border shadow-md bg-white rounded-md flex">
                <img class="w-full max-w-xs max-h-60 object-fill hidden md:block" src="{{$paquete->img}}" alt="">
                <div class="p-2 w-full">
                    <h3 class="font-bold">{{$paquete->nombre}}</h3>
                    <p class="font-bold text-green-600">S/{{$paquete->precio}}</p>
                    <p>{{$paquete->descripcion}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection