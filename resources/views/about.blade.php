@extends('layouts.app')

@section('content')

<div class="min-h-[80vh] px-4 py-10 flex items-center justify-center">

    <!-- Card -->
    <div class="w-full max-w-4xl bg-white rounded-3xl shadow-lg p-8 sm:p-12">

        <!-- Título -->
        <h1 class="text-4xl font-semibold text-center mb-8">
            Sobre o Chirper
        </h1>

        <!-- Conteúdo -->
        <div class="space-y-6 text-gray-700 leading-relaxed text-lg">

            <p>
                O Chirper é um projeto simples criado para praticar desenvolvimento web com Laravel e Tailwind CSS.
                Ele simula uma rede social de mensagens curtas, onde os usuários podem criar contas e publicar pequenos textos.
            </p>

            <p>
                A ideia principal é entender na prática como funciona um sistema completo: rotas, controllers,
                autenticação básica, views com Blade e estilização moderna.
            </p>

            <p>
                Apesar de ser um projeto de estudo, ele já segue uma estrutura parecida com aplicações reais,
                o que ajuda bastante no meu aprendizado e na minha evolução como desenvolvedora.
            </p>

        </div>

    </div>

</div>

@endsection