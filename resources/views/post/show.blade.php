@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Detalle Blog')

@section('content')
    <div>
        <h1 class="font-semibold text-6xl text-start ml-8 text-gray-800 leading-tight">Vista detalle del post:
            {{ $post->id }}</h1>

        @if ($post)
            <div class="w-screen">
                <div class="flex flex-col items-center">
                    <div class="flex flex-col mb-6 mt-6 px-36 py-6 rounded bg-gray-300 gap-2 w-[92%]">
                        <div>Id: {{ $post->id }} </div>
                        <div>Titulo: {{ $post->title }}</div>
                        <div>Poster: {{ $post->poster }} </div>
                        <div>Contenido: {{ $post->content }} </div>
                    </div>

                    <a href="{{ route('post.edit', $post->id) }}" class="w-screen flex justify-center">
                        <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400 w-32">Editar</button>
                    </a>
                </div>




            </div>
        @else
            <h1>No hay objeto</h1>
        @endif
    </div>
@endsection
