@extends('layouts.app')
@section('title','Pacientes')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-blue-700">Pacientes</span></h1>
<div class="flex justify-end p-2">
    <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
    href="{{route('pacientes')}}"><i class='bx bx-arrow-back'></i> Volver</a>
</div>
<div class="flex flex-row gap-3 h-80 animate__animated animate__bounceInRight">
    <div class="bg-white shadow-md border-2 w-2/4">
        <img class="object-cover w-full h-full" src="{{asset($paciente->img)}}" alt="{{asset($paciente->nombre)}}">
    </div>
    <div class="bg-white shadow-md border-2 w-full p-3">
        <p class="font-bold">Codigo Paciente: <span class="font-normal" >
            {{$paciente->id_paciente}}</span> 
        </p>
        <p class="font-bold">Nombre: <span class="font-normal" >
            {{$paciente->nombre}}</span> 
        </p>
        <p class="font-bold">Apellidos: <span class="font-normal" >
            {{$paciente->apellido_paterno." ".$paciente->apellido_materno}}</span> 
        </p>
        <p class="font-bold">Dni: <span class="font-normal" >
            {{$paciente->dni}}</span> 
        </p>
        <p class="font-bold">Fecha de Nacimiento: <span class="font-normal" >
            {{$paciente->fecha_nacimiento}}</span> 
        </p>
        <p class="font-bold">Correo: <span class="font-normal" >
            {{$paciente->correo}}</span> 
        </p>
        <p class="font-bold">Telefono: <span class="font-normal" >
            {{$paciente->telefono}}</span> 
        </p>
    </div>
</div>
<div class="border my-4 p-3 text-center shadow-md rounded border-gray-600 cursor-default">
    <h3 class="font-bold uppercase text-lg text-blue-800" >Lista de citas</h3>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-2">
    @foreach ($citas as $cita)
        <div class="border shadow-md border-black p-2 rounded transition-all hover:-translate-y-3 cursor-default">
            <p class="text-blue-700 uppercase font-bold">Especialista:
                <span class="text-black font-normal" >{{$cita->nombre." ".$cita->apellido_p." ".$cita->apellido_m}}</span>
            </p>
            <p class="text-blue-700 uppercase font-bold">Fecha:
                <span class="text-black font-normal" >{{$cita->fecha}}</span>
            </p>
            <p class="text-blue-700 uppercase font-bold">Descripcion</p>
            <p>
                {{$cita->descripcion}}
            </p>
        </div>
    @endforeach
</div>

@endsection