<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-slate-200 h-screen flex justify-center items-center" >
    <div class="w-5/6 md:w-2/4 mx-auto bg-white p-3 rounded-md shadow-md flex gap-2">
        <div class="hidden sm:block">
            <img src="{{asset('img/icons/doctor.svg')}}" alt="icono login">
        </div>
        <div>
            <form action="{{route('login.store')}}" method="post">
                @csrf
                <div class="flex flex-col gap-2 mb-3">
                    <label class="text-xl font-sans font-bold" for="">Email</label>
                    <input class="border-2 rounded-md p-2 text-xl" 
                           type="email"
                           name="correo">
                </div>
                <div class="flex flex-col gap-2 mb-3">
                    <label class="text-xl font-sans font-bold" for="">Password</label>
                    <input class="border-2 rounded-md p-2 text-xl" 
                           type="password"
                           name="clave">
                </div>
                <input class="bg-blue-500 text-white font-sans font-bold p-2 cursor-pointer rounded transition-all hover:shadow-blue-500 hover:shadow-sm hover:bg-blue-700" 
                       type="submit" 
                       value="INICIAR SESSION">
            </form>
        </div>
    </div>
</body>
</html>