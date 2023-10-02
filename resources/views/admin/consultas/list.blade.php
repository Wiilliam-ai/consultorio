@extends('layouts.app')
@section('title','Consultas')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-purple-700">Cosultas Medicas</span></h1>
<div class="flex justify-end p-2">
 <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
 href="{{route('consultas.create')}}">+ Agregar consulta</a>
</div>
<div>
   <table id="tabla-cita" class="table w-full">
      <thead class="bg-blue-500 text-white">
        <tr class="text-start">
          <th class="p-2 text-2xl">Paciente</th>
          <th class="p-2 text-2xl">Motivo</th>
          <th class="p-2 text-2xl">Tiempo</th>
          <th class="p-2 text-2xl">Fecha</th>
          <th class="p-2 text-2xl">#</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($consultas as $consulta)  
         <tr class="border-b-2 border-t-2 border-black text-start">
           <td class="p-2 text-xl uppercase">
            {{ $consulta->nombre." ".$consulta->apellido_paterno." ".$consulta->apellido_materno }}</td>
           <td class="p-2 text-xl uppercase">{{ $consulta->motivo }}</td>
           <td class="p-2 text-xl uppercase">{{ $consulta->tiempo }} Hora</td>
           <td class="p-2 text-xl uppercase">{{ $consulta->fecha }}</td>
           <td>
             <a class="text-black font-bold text-lg transition-all hover:text-blue-700" 
                href="{{route('consultas.edit',$consulta->id_consulta)}}">
               <i class='bx bxs-edit-alt' ></i>
               Editar
             </a>
             <form action="{{route('consultas.destroy',$consulta->id_consulta)}}" method="post">
               @csrf
               @method('DELETE')
                 <button class="text-red-600 font-bold text-lg transition-all hover:text-blue-700" 
                         type="submit">
                   <i class='bx bxs-trash-alt' ></i>
                   Eliminar
                 </button>
             </form>
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