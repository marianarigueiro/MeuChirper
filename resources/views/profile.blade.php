@extends('layouts.app')

@section('content')

<div class="space-y-6">

    <!-- PERFIL (NOME + EMAIL) -->
    <div class="bg-white p-6 rounded-3xl shadow-sm flex items-center gap-6">

        <div class="w-16 h-16 rounded-full bg-blue-500 flex items-center justify-center text-white text-xl font-bold">
            {{ strtoupper(substr($user->name, 0, 1)) }}
        </div>

        <div>
            <h2 class="text-2xl font-semibold">
                {{ $user->name }}
            </h2>

            <p class="text-gray-500 text-sm">
                {{ $user->email }}
            </p>

            <p class="text-gray-400 text-xs mt-1">
                Membro desde {{ $user->created_at->format('d/m/Y') }}
            </p>
        </div>

    </div>

    <!-- ESTATÍSTICAS -->
    <div class="bg-white p-6 rounded-3xl shadow-sm flex gap-10">

        <div>
            <p class="text-xl font-bold text-gray-800">
                {{ $totalChirps }}
            </p>
            <p class="text-xs text-gray-500">
                Posts
            </p>
        </div>

    </div>

    <!-- CHIRPS -->
    <div class="space-y-4">

        <h3 class="text-lg font-semibold">
            Chirps do usuário
        </h3>

        @forelse ($user->chirps as $chirp)

            <div class="bg-white p-4 rounded-2xl shadow-sm">
                <p class="text-gray-700">
                    {{ $chirp->message }}
                </p>

                <span class="text-xs text-gray-400">
                    {{ $chirp->created_at->diffForHumans() }}
                </span>
            </div>

        @empty

            <p class="text-gray-500 text-sm">
                Nenhum chirp ainda.
            </p>

        @endforelse

    </div>

</div>

@endsection