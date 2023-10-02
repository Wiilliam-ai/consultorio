@extends('layouts.app')
@section('title','Paquetes')
@section('content')

<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-blue-700">Paquetes</span></h1>
<div class="flex justify-end p-2">
    <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
    href="{{route('paquetes')}}"><i class='bx bx-arrow-back'></i> Volver</a>
</div>

<div class="border-2 p-2 rounded-md shadow-md">
    <form action="{{route('paquetes.update',$paquete->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="flex flex-col gap-2 mb-2">
                <label for="nombre" class="text-lg font-bold">Nombre</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese el nombre del paquete"
                       name="nombre"
                       value="{{$paquete->nombre}}" 
                       id="nombre">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="precio" class="text-lg font-bold">Precio</label>
                <input class="border-2 p-2 text-lg"
                       type="number"
                       placeholder="Ingrese el precio del paquete"
                       name="precio"
                       value="{{$paquete->precio}}" 
                       id="precio">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="descripcion" class="text-lg font-bold">Descripcion</label>
                <textarea class="border-2 p-2 text-lg h-full"
                       name="descripcion" 
                       id="descripcion">{{$paquete->descripcion}}</textarea>
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="imagen" class="text-lg font-bold">Imagen</label>
                <input class="border-2 p-2 text-lg"
                       type="file" 
                       accept="image/jpeg, image/png" 
                       name="imagen" 
                       id="imagen">
                <img class="h-56 w-80 object-fill" src="{{asset($paquete->img)}}" alt="{{$paquete->nombre}}">
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