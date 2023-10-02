@extends('layouts.app')
@section('title','Especialistas')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-blue-700">Especialistas</span></h1>
<div class="flex justify-end p-2">
    <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
    href="{{route('especialistas.create')}}">+ Agregar nuevo especialista</a>
   </div>
<div>
    <table id="tabla-cita" class="table w-full">
       <thead class="bg-blue-500 text-white">
         <tr>
           <th class="p-2 text-2xl">Nombre</th>
           <th class="p-2 text-2xl">Apellido</th>
           <th class="p-2 text-2xl">Fecha de nacimiento</th>
           <th class="p-2 text-2xl">Institucion</th>
           <th class="p-2 text-2xl">#</th>
         </tr>
       </thead>
       <tbody>
        @foreach ($especialistas as $especialista)  
          <tr class="border-b-2 border-t-2 border-black text-center">
            <td class="p-2 text-xl">{{ $especialista->nombre }}</td>
            <td class="p-2 text-xl">{{ $especialista->apellido_paterno." ".$especialista->apellido_materno }}</td>
            <td class="p-2 text-xl">{{$especialista->fecha_nacimiento}}</td>
            <td class="p-2 text-xl text-start">{{$especialista->istitucion}}</td>
            <td class="text-start">
              <a class="text-black font-bold text-lg transition-all hover:text-blue-700" 
              href="{{route('especialistas.edit',$especialista->id_especialista)}}">
                <i class='bx bxs-edit-alt' ></i>
                Editar
              </a>
            </td>
          </tr>
        @endforeach
       </tbody>
     </table>
  </div>
@endsection
@section('scripts')
 @vite('resources/js/tables.js')
@endsection