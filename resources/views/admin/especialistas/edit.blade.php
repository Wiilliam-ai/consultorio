@extends('layouts.app')
@section('title','Especialistas')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-blue-700">Especialistas</span></h1>
<div class="flex justify-end p-2">
    <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
    href="{{route('especialistas')}}"><i class='bx bx-arrow-back'></i> Volver</a>
</div>
<div class="border-2 p-2 rounded-md shadow-md">
    <form action="{{route('especialistas.update',$especialista->id_especialista)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Apellido Paterno</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese el apellido ej. Caseda"
                       name="apellidoP"
                       value="{{$especialista->apellido_paterno}}" 
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Apellido Materno</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese el apellido ej. Solis"
                       name="apellidoM"
                       value="{{$especialista->apellido_materno}}" 
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Nombre</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese el nombre ej. Juan"
                       name="nombre"
                       value="{{$especialista->nombre}}" 
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Fecha nacimiento</label>
                <input class="border-2 p-2 text-lg"
                       type="date"
                       name="fecha"
                       value="{{$especialista->fecha_nacimiento}}" 
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Institucion</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese su correo institucion"
                       name="institucion"
                       value="{{$especialista->istitucion}}" 
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Estado</label>
                <select class="border-2 p-2 text-lg" name="estado" id="">
                    <option value="1" {{$especialista->id_estado==1?'selected':''}} >Activo</option>
                    <option value="2" {{$especialista->id_estado==2?'selected':''}} >Inactivo</option>
                </select>
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
