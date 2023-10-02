@extends('layouts.app')
@section('title','Pacientes')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-blue-700">Pacientes</span></h1>
<div class="flex justify-end p-2">
    <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
    href="{{route('pacientes')}}"><i class='bx bx-arrow-back'></i> Volver</a>
</div>

<div class="border-2 p-2 rounded-md shadow-md">
    <form action="{{route('pacientes.update',$paciente->id_paciente)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">DNI</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese el dni ej. 35694253"
                       name="dni"
                       value="{{$paciente->dni}}"
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Apellido Paterno</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese el apellido ej. Caseda"
                       name="apellidoP"
                       value="{{$paciente->apellido_paterno}}" 
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Apellido Materno</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese el apellido ej. Solis"
                       name="apellidoM" 
                       value="{{$paciente->apellido_materno}}"
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Nombre</label>
                <input class="border-2 p-2 text-lg"
                       type="text"
                       placeholder="Ingrese el nombre ej. Juan"
                       name="nombre" 
                       value="{{$paciente->nombre}}"
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Fecha nacimiento</label>
                <input class="border-2 p-2 text-lg"
                       type="date"
                       name="fecha"
                       value="{{$paciente->fecha_nacimiento}}"
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Imagen</label>
                <input class="border-2 p-2 text-lg"
                       type="file" 
                       accept="image/jpeg, image/png" 
                       name="imagen" 
                       id="">
            </div>
            <div class="flex flex-col gap-2 mb-2">
                <label for="" class="text-lg font-bold">Correo</label>
                <input class="border-2 p-2 text-lg"
                       type="email"
                       placeholder="Ingrese su correo personal"
                       name="correo" 
                       value="{{$paciente->correo}}"
                       id="">
                <label for="" class="text-lg font-bold">Telefono</label>
                <input class="border-2 p-2 text-lg"
                        type="tel"
                        placeholder="Ingrese su telefono"
                        name="telefono" 
                        value="{{$paciente->telefono}}"
                        id="">
            </div>
            <div>
                <img src="{{asset($paciente->img)}}" alt="">
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