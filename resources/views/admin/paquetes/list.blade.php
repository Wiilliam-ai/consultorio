@extends('layouts.app')
@section('title','Paquetes')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-purple-700">paquetes</span></h1>
<div class="flex justify-end p-2">
 <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
 href="{{route('paquetes.create')}}">+ Agregar paquete</a>
</div>

<div class="grid grid-cols-1 md:grid-cols-4 gap-3">
    @foreach ($paquetes as $p)
        <div class="border border-gray-500 rounded-md overflow-hidden shadow-md shadow-gray-300">
            <div class="hidden md:block">
                <img class="w-full md:h-40 lg:h-64 object-cover" src="{{ asset($p->img) }}" alt="{{$p->nombre}}">
            </div>
            <div class="p-2">
                <p class="text-blue-700 font-bold uppercase">{{$p->nombre}}</p>
                <p>{{$p->descripcion}}</p>
                <p class="text-blue-700 font-bold uppercase">Precio:<span class="text-black font-normal"> S/{{$p->precio}}</span></p>
            </div>
            <div class="px-2 pb-2 flex m-0 justify-between">
                <a class="bg-gray-700 p-2 rounded text-white font-bold uppercase transition-all hover:bg-black" 
                   href="{{route('paquetes.edit',$p->id)}}">
                   <i class='bx bxs-edit-alt'></i>
                   Edit</a>
                <form action="{{route('paquetes.delete',$p->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="bg-blue-700 p-2 rounded text-white font-bold uppercase transition-all hover:bg-blue-900" type="submit">
                        <i class='bx bxs-trash' ></i>
                        delete
                    </button>
                </form>
            </div>
        </div>
    @endforeach
</div>
@endsection