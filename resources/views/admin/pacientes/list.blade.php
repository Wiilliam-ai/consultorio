@extends('layouts.app')
@section('title','Pacientes')
@section('content')
<h1 class="text-4xl text-black uppercase font-bold text-center my-4">Mantenimiento de <span class="text-blue-700">Pacientes</span></h1>
<div class="flex justify-end p-2">
 <a class="block w-max bg-blue-800 text-white font-bold p-2 transition-all hover:bg-indigo-500 hover:shadow-md shadow-indigo-500" 
 href="{{route('pacientes.create')}}">+ Agregar nuevo paciente</a>
</div>
<div>
   <table id="tabla-cita" class="table w-full">
      <thead class="bg-blue-500 text-white">
        <tr>
          <th class="p-2 text-2xl">#</th>
          <th class="p-2 text-2xl">DNI</th>
          <th class="p-2 text-2xl">Paciente</th>
          <th class="p-2 text-2xl">Contacto</th>
          <th class="p-2 text-2xl">Acciones</th>
        </tr>
      </thead>
      <tbody>
       @foreach ($pacientes as $paciente)  
         <tr class="border-b-2 border-t-2 border-black text-center">
           <td class="p-2 text-xl">
              <a class="text-blue-700 text-2xl transition-all hover:text-purple-700" 
                  href="{{route('pacientes.show',$paciente->id_paciente)}}"><i class='bx bxs-show' ></i></a>
           </td>
           <td class="p-2 text-xl">{{ $paciente->dni }}</td>
           <td class="p-2 text-xl">{{ $paciente->nombre." ".$paciente->apellido_paterno." ".$paciente->apellido_materno }}</td>
           <td class="p-2 text-xl text-start">
            <p class="font-bold">Correo: <span class="font-normal">{{$paciente->correo}}</span></p>
            <p class="font-bold">Telefono: <span class="font-normal">{{$paciente->telefono}}</span></p>
           </td>
           <td>
             <a class="text-black font-bold text-lg transition-all hover:text-blue-700" 
             href="{{route('pacientes.edit',$paciente->id_paciente)}}">
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