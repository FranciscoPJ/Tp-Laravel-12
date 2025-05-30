@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Home')

@section('content')
    <div class="flex flex-col items-center text-center">
        <h1 class="text-6xl">Listado de Categoria</h1>

        <a href="{{ route('post.create') }}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Agregar un blog </button>
        </a>

        @if (count($posts) > 0)
            <ul class="flex flex-row gap-1">
                @foreach ($posts as $post)
                    <li> 
                        <a href="{{ route('post.show', $post->id) }}">
                            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
                                <div class="flex flex-col">
                                    <div>Id: {{ $post->id}} </div> 
                                    <div>Titulo: {{ $post->title}}</div>
                                    <div>Poster: {{ $post->poster}} </div>
                                </div>
                            </button>
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <br>
            <h3>No hay blogs subido</h3>
        @endif
    </div>
@endsection