@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Home')

@section('content')
    <div>
        <h1 class="font-semibold text-6xl text-start ml-8 text-gray-800 leading-tight">Listado de Categoria</h1>

        {{-- <a href="{{ route('post.create') }}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Agregar un blog </button>
        </a> --}}

        {{-- @if (Auth::check())
            <p>Estás autenticado como {{ Auth::user()->name }}</p>
        @else
            <p>No estás autenticado</p>
        @endif --}}

        @if (count($categories) > 0)
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-4 text-center">
                @foreach ($categories as $category)
                    <div class="flex flex-col mt-2 items-center">
                        <span class="bg-green-400 w-60 py-1 rounded hover:bg-lime-400">
                            {{ $category->name }}
                        </span>
                    </div>
                @endforeach
            </div>
        @endif

        @auth
            @if (count($posts) > 0)
                <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-4 text-center">
                    @foreach ($posts as $post)
                        <div>
                            <a href="{{ route('post.show', $post->id) }}">
                                <button class="mb-2 mt-2 bg-sky-400 px-6 py-6 rounded hover:bg-cyan-500 w-5/6">
                                    <div class="flex flex-col">
                                        {{-- <span>Id: {{ $post->id }} </span> --}}
                                        <span>Titulo: {{ $post->title }}</span>
                                        <span>Poster: {{ $post->poster }} </span>
                                        <span>Categoria: {{ $post->id_category }} </span>
                                    </div>
                                </button>
                            </a>
                        </div>
                    @endforeach
                </div>
            @else
                <br>
                <h3>No hay blogs subido</h3>
            @endif
        @endauth
    </div>
@endsection
