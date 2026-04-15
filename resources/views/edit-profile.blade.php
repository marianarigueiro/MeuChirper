@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-white p-6 rounded-3xl shadow-sm">

    <h2 class="text-xl font-semibold mb-4">
        Editar perfil
    </h2>

    <form method="POST" action="{{ route('profile.update') }}">
        @csrf

        <input type="text"
               name="name"
               value="{{ auth()->user()->name }}"
               class="w-full bg-gray-50 p-3 rounded-xl mb-4">

        <button class="bg-blue-500 text-white px-4 py-2 rounded-xl hover:bg-blue-600">
            Salvar
        </button>

    </form>

</div>

@endsection