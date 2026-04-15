@extends('layouts.app')

@section('content')

<div class="min-h-[75vh] flex items-center justify-center px-4">

    <!-- Card -->
    <div class="w-full max-w-lg bg-white p-8 sm:p-10 rounded-3xl shadow-lg">

        <!-- Título -->
        <h2 class="text-3xl font-semibold text-center mb-2">
            Criar conta
        </h2>

        <p class="text-center text-gray-500 mb-8 text-sm">
            Comece a usar o Chirper agora mesmo
        </p>

        <!-- Form -->
        <form method="POST" action="/register" class="space-y-5">
            @csrf

            <input
                type="text"
                name="name"
                placeholder="Nome"
                class="w-full bg-gray-50 border-0 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-400"
            >

            <input
                type="email"
                name="email"
                placeholder="Email"
                class="w-full bg-gray-50 border-0 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-400"
            >

            <input
                type="password"
                name="password"
                placeholder="Senha"
                class="w-full bg-gray-50 border-0 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-400"
            >

            <button class="w-full bg-blue-500 text-white py-3 rounded-xl hover:bg-blue-600 transition font-medium">
                Cadastrar
            </button>
        </form>

        <!-- Link -->
        <p class="text-sm text-center text-gray-500 mt-6">
            Já tem conta?
            <a href="/login" class="text-blue-500 hover:underline">
                Entrar
            </a>
        </p>

    </div>

</div>

@endsection