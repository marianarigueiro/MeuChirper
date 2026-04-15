<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900 min-h-screen flex flex-col">

<!-- NAVBAR -->
<header class="bg-white shadow-sm w-full">

    <div class="max-w-5xl mx-auto flex items-center justify-between px-6 py-4">

        <!-- LOGO -->
        <a href="{{ url('/') }}" class="flex items-center gap-2">
            <img src="{{ asset('images/Logo.png') }}" class="h-6 w-6 object-contain" alt="logo">
            <span class="font-semibold text-lg">Chirper</span>
        </a>

        <!-- LINKS -->
        <nav class="flex items-center gap-4 text-sm">

    <a href="{{ url('/about') }}" class="text-gray-600 hover:text-blue-500">
        Sobre
    </a>

    @auth

        <div class="flex items-center gap-3">

            <!-- PERFIL -->
            <a href="/profile/{{ auth()->id() }}"
               class="flex items-center gap-2 bg-gray-100 hover:bg-gray-200 px-3 py-1.5 rounded-full transition">

                <div class="w-6 h-6 rounded-full bg-blue-500 flex items-center justify-center text-white text-xs font-bold">
                    {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
                </div>

                <span class="text-sm text-gray-700">
                    {{ auth()->user()->name }}
                </span>

            </a>

            <!-- LOGOUT -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button class="text-gray-600 hover:text-red-500 transition text-sm">
                    Sair
                </button>

            </form>

        </div>

    @else

        <!-- REGISTER -->
        <a href="{{ url('/register') }}"
   class="bg-blue-500 text-white px-4 py-1.5 rounded-full hover:bg-blue-600 transition">
    Criar conta
</a>
    
        <!-- LOGIN -->
        <a href="{{ url('/login') }}" class="text-gray-600 hover:text-blue-500">
            Entrar
        </a>

    @endauth

</nav>

    </div>

</header>

<!-- CONTENT -->
<main class="flex-1 w-full max-w-5xl mx-auto px-6 py-8">
    @yield('content')
</main>

<!-- FOOTER -->
<footer class="bg-white shadow-sm">
    <div class="max-w-5xl mx-auto px-6 py-6 flex flex-col sm:flex-row justify-between items-center text-sm text-gray-500">

        <p class="text-gray-500">
            © {{ date('Y') }} Chirper
        </p>

        <div class="flex items-center gap-5 mt-3 sm:mt-0">

            <a href="https://github.com/marianarigueiro"
               target="_blank"
               class="hover:text-blue-500 transition">
                Por: Mariana Rigueiro
            </a>

        </div>

    </div>
</footer>

</body>
</html>