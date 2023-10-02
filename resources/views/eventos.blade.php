@extends('layouts.public')
@section('contenido')
<div class="p-2 max-w-7xl mx-auto">
    <h2 class="font-bold text-xl my-3">Conoce todos nuestros nuestros eventos</h2>
    <div class="grid grid-cols-3 gap-2">
        @foreach ($eventos as $evento)
            <div class="border shadow-md p-2 bg-white rounded-md flex flex-col transition-all hover:-translate-y-3">
                <a class="transition-all hover:text-blue-800" 
                   href="{{route('events.show',$evento->id)}}">{{$evento->titulo}}</a>
                <p>{{$evento->fecha}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection