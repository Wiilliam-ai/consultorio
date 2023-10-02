<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <title>@yield('title','document')</title>
</head>
<body class="bg-white">
    <div class="flex">
        <div id="barraT" class="h-screen w-full bg-blue-900" style="max-width: 200px;">
            @include('partials.nav')
        </div>
        <div class="w-full overflow-scroll h-screen p-2">
            @yield('content')
        </div>
    </div>
    <button id="menu-burger" class="absolute text-white right-6 bottom-6 bg-blue-900 p-2 uppercase rounded sm:hidden">
        MENU
    </button>
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>
    @yield('scripts')
    @vite('resources/js/menu.js')
</body>
</html>