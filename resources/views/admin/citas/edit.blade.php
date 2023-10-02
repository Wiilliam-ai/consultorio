@extends('layouts.app')
@section('title','Citas')
@section('content')
 <h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-purple-700">citas</span></h1>
 <div class="flex justify-end p-2">
  <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
  href="{{route('citas')}}"><i class='bx bx-arrow-back'></i> Volver</a>
 </div>

 <div class="border-2 p-2 rounded-md shadow-md">
    <form action="{{route('citas.update',$cita->id_cita)}}" method="post">
        @csrf
        @method('PATCH')
        <div class="flex flex-col gap-2 mb-2">
            <label for="" class="text-lg font-bold">ID</label>
            <input class="border-2 p-2 text-lg"
                   type="text"
                   placeholder="Ingrese el id del paciente"
                   name="paciente" 
                   id=""
                   value="{{ $cita->id_paciente }}">
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <label for="" class="text-lg font-bold">Fecha</label>
            <input class="border-2 p-2 text-lg"
                   type="date"
                   name="fecha" 
                   id=""
                   value="{{ $cita->fecha }}">
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <label for="" class="text-lg font-bold">Especialista</label>
            <select class="border-2 p-2 text-lg uppercase" name="especialista" id="">
                @foreach ($especialistas as $e )
                <option value="{{$e->id_especialista}}" {{ $e->id_especialista ==$cita->id_especialista?'selected':'' }} >
                    {{$e->nombre." ".$e->apellido_paterno}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <label for="" class="text-lg font-bold">Categoria</label>
            <select class="border-2 p-2 text-lg uppercase" name="categoria" id="">
                @foreach ($categorias as $e )
                <option value="{{$e->id}}" {{ $e->id ==$cita->id_categoria?'selected':'' }}>
                    {{$e->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="flex flex-col gap-2 mb-2">
            <label for="" class="text-lg font-bold">Descripcion</label>
            <textarea class="border-2 p-2 text-lg" 
                      name="descripcion" 
                      id="">{{$cita->descripcion}}</textarea>
        </div>
        <button class="bg-blue-800 text-white font-bold p-2 transition-all hover:bg-gray-700" 
                type="submit">
            <i class='bx bxs-save' ></i>
            ACTUALIZAR
        </button>
    </form>
 </div>

@endsection