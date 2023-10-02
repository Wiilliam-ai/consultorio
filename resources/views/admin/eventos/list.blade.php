@extends('layouts.app')
@section('title','Eventos')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-purple-700">Eventos</span></h1>
<div class="flex justify-end p-2">
 <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
 href="{{route('eventos.create')}}">+ Agregar evento</a>
</div>

@foreach ($eventos as $e )
    <div class="grid grid-cols-3 p-2 gap-2 border border-black rounded shadow-md shadow-gray-400 my-3">
        <div class="col-span-1">
            <img class="w-full max-h-80 object-cover" src="{{asset($e->img)}}" alt="{{$e->titulo}}">
            <div class="flex my-3 justify-start gap-2">
                <a class="bg-gray-700 p-2 rounded text-xs text-white font-bold uppercase transition-all hover:bg-black" 
                href="{{route('eventos.edit',$e->id)}}">
                <i class='bx bxs-edit-alt'></i>
                Edit</a>
                <form action="{{route('eventos.destroy',$e->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-blue-700 p-2 rounded text-xs text-white font-bold uppercase transition-all hover:bg-blue-900" type="submit">
                        <i class='bx bxs-trash' ></i>
                        delete
                    </button>
                </form>
            </div>
        </div>
        <div class="col-span-2">
            <p class="text-black uppercase font-bold">{{$e->titulo}}</p>
            <p class="italic">{{$e->fecha}}</p>
            <p>{{$e->descripcion}}</p>
        </div>
    </div>
@endforeach
@endsection