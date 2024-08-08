<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto web</title>
    @vite('resources/css/app.css') <!-- Esta línea debe cargar el CSS generado -->
</head>
<body>
    <div class="container px-4 mx-auto">
        <header class="flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}" class="h-10 w-auto"> <!-- Ajusta aquí el tamaño -->
                </a>
                <form action="">
                    <input type="text" placeholder="Buscar">
                </form>
            </div>
            @auth
                <a href="{{ route('Dashboard') }}">Dashboard</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </header>
            <div class="opacity-60 h-px mb-8" style="
                background: linear-gradient(to right,
                    rgba(200, 200, 200, 0) 0%,
                    rgba(200, 200, 200, 1) 30%,
                    rgba(200, 200, 200, 1) 70%,
                    rgba(200, 200, 200, 0) 100%
                );
            ">

		</div>

        @yield('content')
            <p class="py-16">
                <img src="{{ asset('images/logo.png') }}" class="h-12 mx-auto">
            </p>
    </div>
    @vite('resources/js/app.js')
</body>
</html>
