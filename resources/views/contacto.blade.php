@extends('layouts.public')
@section('contenido')
<div class="p-2">
    <div class="w-full max-w-4xl mx-auto mt-6 grid grid-cols-2 gap-2">
        <div>
            <img src="{{asset('img/icons/contact.svg')}}" alt="contacto">
        </div>
        <div class="bg-white shadow-lg rounded-md p-3">
            <form action="{{route('contact.store')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label class="font-bold" for="">Nombre</label>
                    <input class="block w-full border-b-2 border-blue-600 outline-none p-2" 
                           type="text" 
                           name="nombre" 
                           id="">
                </div>
                <div class="mb-3">
                    <label class="font-bold" for="">Telefono</label>
                    <input class="block w-full border-b-2 border-blue-600 outline-none p-2" 
                           type="text" 
                           name="telefono" 
                           id="">
                </div>
                <div class="mb-3">
                    <label class="font-bold" for="">Correo</label>
                    <input class="block w-full border-b-2 border-blue-600 outline-none p-2" 
                           type="text" 
                           name="correo" 
                           id="">
                </div>
                <div class="mb-3">
                    <label class="font-bold" for="">Mensaje</label>
                    <textarea class="block w-full border-2 border-blue-600 outline-none p-2 resize-none" 
                           name="mensaje" 
                           id=""></textarea>
                </div>
                <button class="bg-gradient-to-r from-cyan-500 to-blue-500 text-white font-bold text-xl rounded-md p-1 transition-all hover:-translate-y-1" type="submit">
                    <i class='bx bxs-send'>ENVIAR</i>
                </button>
            </form>
        </div>
        @if (session('status'))
            <div class="text-white bg-green-700 font-bold col-span-2 p-2 text-center rounded shadow-lg">
                {{session('status')}}
            </div>
        @endif
    </div>
</div>
@endsection