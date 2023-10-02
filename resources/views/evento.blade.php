@extends('layouts.public')
@section('contenido')
<div class="p-2 max-w-4xl mx-auto">
    <div class="bg-white rounded-md shadow-md shadow-gray-400 p-2">
        <h2 class="font-bold text-xl my-4 text-center">{{$evento->titulo}}</h2>
        <div class="max-w-xl mx-auto">
            <img class="w-full" src="{{asset($evento->img)}}" alt="{{$evento->titulo}}">
            <p>Dia del evento: {{$evento->fecha}}</p>
            <p class="text-justify">{{$evento->descripcion}}</p>
        </div>
    </div>
</div>
@endsection