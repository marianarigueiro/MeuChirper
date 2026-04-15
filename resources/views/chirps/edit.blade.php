@extends('layouts.app')

@section('content')

<div class="max-w-xl mx-auto bg-white p-6 rounded-3xl shadow-sm">

    <h2 class="text-xl font-semibold mb-4">
        Editar post
    </h2>

    <form method="POST" action="{{ route('chirps.update', $chirp) }}">
        @csrf
        @method('PUT')

        <textarea name="message"
          class="w-full bg-gray-50 p-3 rounded-xl mb-4 border-0 focus:outline-none focus:ring-2 focus:ring-gray-300"
          rows="4">{{ $chirp->message }}</textarea>

        <button class="bg-blue-500 text-white px-4 py-2 rounded-xl hover:bg-blue-600">
            Salvar
        </button>

    </form>

</div>

@endsection