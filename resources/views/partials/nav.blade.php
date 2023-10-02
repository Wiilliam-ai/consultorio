<nav class="p-2">
    <ul>
        <li class="p-2 transition-all hover:bg-blue-600 rounded {{request()->routeIs('menu')?'bg-blue-600':''}}">
            <a class="uppercase font-sans font-bold text-gray-100" 
            href="{{ route('menu') }}">
            <i class='bx bxs-dashboard'></i>
            Dashboard</a>
        </li>
        <li class="p-2 transition-all hover:bg-blue-600 rounded {{request()->routeIs('citas')?'bg-blue-600':''}} ">
            <a class="uppercase font-sans font-bold text-gray-100" 
            href="{{route('citas')}}">
            <i class='bx bxs-notepad' ></i>
            Citas</a></li>
        <li class="p-2 transition-all hover:bg-blue-600 rounded {{request()->routeIs('consultas')?'bg-blue-600':''}} ">
            <a class="uppercase font-sans font-bold text-gray-100" 
            href="{{route('consultas')}}">
            <i class='bx bxs-calendar-check' ></i>
            Consultas</a>
        </li>
        <li class="p-2 transition-all hover:bg-blue-600 rounded {{request()->routeIs('especialistas')?'bg-blue-600':''}} ">
            <a class="uppercase font-sans font-bold text-gray-100" 
            href="{{route('especialistas')}}">
            <i class='bx bxs-graduation' ></i>
            Especialistas</a>
        </li>
        <li class="p-2 transition-all hover:bg-blue-600 rounded {{request()->routeIs('pacientes')?'bg-blue-600':''}} ">
            <a class="uppercase font-sans font-bold text-gray-100" 
            href="{{route('pacientes')}}">
            <i class='bx bxs-user' ></i>
            Pacientes</a>
        </li>
        <li class="p-2 transition-all hover:bg-blue-600 rounded {{request()->routeIs('eventos')?'bg-blue-600':''}} ">
            <a class="uppercase font-sans font-bold text-gray-100" 
            href="{{route('eventos')}}">
            <i class='bx bxs-calendar-event' ></i>
            Eventos</a>
        </li>
        <li class="p-2 transition-all hover:bg-blue-600 rounded {{request()->routeIs('paquetes')?'bg-blue-600':''}} ">
            <a class="uppercase font-sans font-bold text-gray-100" 
            href="{{route('paquetes')}}">
            <i class='bx bxs-package' ></i>
            Paquetes</a>
        </li>
        <li class="p-2 transition-all hover:bg-blue-600 rounded {{request()->routeIs('correos')?'bg-blue-600':''}} ">
            <a class="uppercase font-sans font-bold text-gray-100" 
            href="{{route('correos')}}">
            <i class='bx bxs-envelope'></i>
            Correos</a>
        </li>
        <li class="p-2 transition-all bg-black rounded">
            <form action="{{route('login.destroy')}}" method="post">
                @csrf
                <button class="uppercase font-sans font-bold text-gray-100" type="submit">
                    <i class='bx bx-log-in-circle'></i>
                    Cerrar Session
                </button>
            </form>
        </li>
    </ul>
</nav>