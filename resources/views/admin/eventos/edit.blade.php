@extends('layouts.app')
@section('title','Eventos')
@section('content')

<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Registro de <span class="text-blue-700">Eventos</span></h1>
<div class="flex justify-end p-2">
    <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
    href="{{route('eventos')}}"><i class='bx bx-arrow-back'></i> Volver</a>
</div>

<div class="border-2 p-2 rounded-md shadow-md">
    <form action="{{route('eventos.update',$evento->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="">
                <div class="flex flex-col gap-2 mb-2">
                    <label for="titulo" class="text-lg font-bold">Titulo</label>
                    <input class="border-2 p-2 text-lg"
                           type="text"
                           placeholder="Ingrese el titulo del paquete"
                           name="titulo"
                           value="{{$evento->titulo}}" 
                           id="titulo">
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="fecha" class="text-lg font-bold">Fecha</label>
                    <input class="border-2 p-2 text-lg"
                           type="date"
                           name="fecha"
                           value="{{$evento->fecha}}"  
                           id="fecha">
                </div>
                <div class="flex flex-col gap-2 mb-2">
                    <label for="descripcion" class="text-lg font-bold">Descripcion</label>
                    <textarea class="border-2 p-2 text-lg"
                           name="descripcion"
                           rows="10" 
                           id="descripcion">{{$evento->descripcion}}</textarea>
                </div>
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="imagen" class="text-lg font-bold">Imagen</label>
                <input class="border-2 p-2 text-lg"
                       type="file" 
                       accept="image/jpeg, image/png" 
                       name="imagen" 
                       id="imagen">
                <img src="{{asset($evento->img)}}" alt="{{$evento->titulo}}">
            </div>
        </div>
        <button class="bg-blue-800 text-white font-bold p-2 transition-all hover:bg-gray-700" 
                type="submit">
            <i class='bx bxs-save' ></i>
            ACTUALIZAR
        </button>
    </form>
 </div>

 @endsection