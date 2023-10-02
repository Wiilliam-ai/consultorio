<header class="bg-blue-800">
    <div class="max-w-7xl mx-auto flex justify-between px-2 py-3">
        <div>
            <h1 class="text-white font-bold uppercase text-xl">Esperanza de Vida</h1>
        </div>
        <nav class="flex flex-row gap-2">
            <a class="text-xl {{request()->routeIs('home')?'text-blue-600 font-bold':'text-white'}}" href="{{route('home')}}">Inicio</a>
            <a class="text-xl {{request()->routeIs('events')?'text-blue-600 font-bold':'text-white'}}" href="{{route('events')}}">Eventos</a>
            <a class="text-xl {{request()->routeIs('packages')?'text-blue-600 font-bold':'text-white'}}" href="{{route('packages')}}">Paquetes</a>
            <a class="text-xl {{request()->routeIs('nosotros')?'text-blue-600 font-bold':'text-white'}}" href="{{route('nosotros')}}">Nosotros</a>
            <a class="text-xl {{request()->routeIs('contact')?'text-blue-600 font-bold':'text-white'}}" href="{{route('contact')}}">Contacto</a>
        </nav>
    </div>
</header>