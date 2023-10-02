@extends('layouts.app')
@section('title','Consultas')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-purple-700">consultas</span></h1>
<div class="flex justify-end p-2">
 <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
 href="{{route('consultas')}}"><i class='bx bx-arrow-back'></i> Volver</a>
</div>

<div class="border-2 p-2 rounded-md shadow-md">
   <form action="{{route('consultas.store')}}" method="post">
       @csrf
       <div class="flex flex-col gap-2 mb-2">
           <label for="" class="text-lg font-bold">ID</label>
           <input class="border-2 p-2 text-lg"
                  type="text"
                  placeholder="Ingrese el id del paciente"
                  name="paciente" 
                  id="">
       </div>
       <div class="flex flex-col gap-2 mb-2">
           <label for="" class="text-lg font-bold">Fecha</label>
           <input class="border-2 p-2 text-lg"
                  type="date"
                  name="fecha" 
                  id="">
       </div>
       <div class="flex flex-col gap-2 mb-2">
           <label for="" class="text-lg font-bold">Tiempo</label>
           <input class="border-2 p-2 text-lg"
                  type="number"
                  name="tiempo"
                  placeholder="Ingrese la cantidad de horas ej.2"
                  max="9"
                  min="1" 
                  id="">
       </div>
       <div class="flex flex-col gap-2 mb-2">
           <label for="" class="text-lg font-bold">Descripcion</label>
           <textarea class="border-2 p-2 text-lg" name="motivo" id=""></textarea>
       </div>
       <button class="bg-blue-800 text-white font-bold p-2 transition-all hover:bg-gray-700" 
               type="submit">
           <i class='bx bxs-save' ></i>
           REGISTRAR
       </button>
   </form>
</div>
@endsection