@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Detalle')

@section('content')
    <div class="flex flex-col items-center text-center">
        <h1 class="text-6xl">Vista detalle del post: {{ $post->id }}</h1>

        @if ($post)
            <div class="flex flex-col mb-6 mt-6 bg-gray-300 px-12 py-6 rounded hover:bg-gray-400">
                <div>Id: {{ $post->id }} </div>
                <div>Titulo: {{ $post->title }}</div>
                <div>Poster: {{ $post->poster }} </div>
                <div>Contenido: {{ $post->content }} </div>
            </div>
        @else
            <h1>No hay objeto</h1>
        @endif
        
        {{-- <a href="{{ route('post.create') }}"> --}}
        <a href="{{ route('post.index') }}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Volver Home</button>
        </a>

        <a href="{{ route('post.edit', $post->id) }}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Editar</button>
        </a>
    </div>
@endsection
