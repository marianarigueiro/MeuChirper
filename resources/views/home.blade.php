@extends('layouts.app')

@section('content')

<div class="space-y-8">

    <!-- Cabeçalho -->
    <div>
        <h2 class="text-3xl font-semibold">
            Últimos Chirps
        </h2>

        <p class="text-gray-500 text-sm mt-1">
            Compartilhe o que está pensando agora mesmo!
        </p>
    </div>

    <!-- Criar chirp -->
    <div class="bg-white p-6 rounded-3xl shadow-lg">

        <form method="POST" action="{{ route('chirps.store') }}">
            @csrf

            <textarea
                name="message"
                class="w-full bg-gray-50 border-0 rounded-xl p-4 focus:outline-none focus:ring-2 focus:ring-blue-400 resize-none"
                rows="3"
                placeholder="O que está em sua mente?"
            ></textarea>

            <div class="flex justify-between items-center mt-4">

                <span class="text-sm text-gray-400">
                    Escreva algo
                </span>

                <button class="bg-blue-500 text-white px-5 py-2.5 rounded-xl hover:bg-blue-600 transition font-medium">
                    Chirp
                </button>

            </div>

        </form>

    </div>

    <!-- FEED -->
    <div class="space-y-4">

        @forelse ($chirps as $chirp)

            <div class="bg-white p-5 rounded-2xl shadow-md">

                <div class="flex justify-between items-center mb-2">

                    <span class="font-semibold text-sm">
                        {{ $chirp->user?->name ?? 'Anônimo' }}
                    </span>

                    <span class="text-xs text-gray-400">
                        {{ $chirp->created_at->diffForHumans() }}
                    </span>

                </div>

                <p class="text-gray-700">
                    {{ $chirp->message }}
                </p>

               @if ($chirp->user_id === auth()->id())

    <div class="flex gap-4 mt-3 text-sm">

        <a href="{{ route('chirps.edit', $chirp) }}"
   class="text-gray-500 hover:text-blue-500 transition font-medium">
    Editar
</a>

        <form method="POST" action="{{ route('chirps.destroy', $chirp) }}">
            @csrf
            @method('DELETE')

            <button class="text-gray-500 hover:text-red-500 transition font-medium">
                Excluir
            </button>

        </form>

    </div>

@endif

            </div>

        @empty

            <div class="text-center py-12 text-gray-500">
                Ainda não tem chirps por aqui...
            </div>

        @endforelse

    </div>

</div>

@endsection