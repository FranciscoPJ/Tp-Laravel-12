@extends('layouts.layout')

@section('title', 'Categorias')

@section('content')
    <div>
        <h1 class="font-semibold text-6xl text-start ml-8 text-gray-800 leading-tight">Listado de Categoría</h1>

        @if (count($categories) > 0)
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-4 text-center">

                {{-- Boton para ver todas las categorías --}}
                <div class="flex flex-col mt-2 items-center">
                    <a class="w-60" href="{{ route('category.index') }}">
                        <span
                            class="w-60 py-1 rounded hover:bg-gray-200 border block text-black text-center font-semibold">
                            Todas las categorías
                        </span>
                    </a>
                </div>

                {{-- Listado de categorias --}}
                @foreach ($categories as $category)
                    <div class="flex flex-col mt-2 items-center">
                        <a class="w-60" href="{{ route('category.index', ['category' => $category->id]) }}">
                            <span class="border w-60 py-1 rounded hover:bg-gray-200 block text-black font-semibold">
                                {{ $category->name }}
                            </span>
                        </a>
                    </div>
                @endforeach                
            </div>
        @endif

        @if (count($posts) > 0)
            @if (request('category'))
                <div class="mt-4 text-lg ml-8 text-black">
                    @php
                        $selected = $categories->firstWhere('id', request('category'));
                    @endphp
                    Mostrando blogs de la categoría: <strong>{{ $selected->name ?? 'Desconocida' }}</strong>
                </div>
            @else
                <div class="mt-4 ml-8 text-lg text-gray-600 transition-opacity duration-500">
                    Mostrando todos los <strong>blogs</strong>
                </div>
            @endif
            
            {{-- Listado de blogs --}}
            <div class="grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 mt-4 text-center">
                @foreach ($posts as $post)
                    <div>
                        <a href="{{ route('category.show', $post->id) }}">
                            <button class="mb-2 mt-2 border px-2 py-2 rounded hover:bg-gray-200 w-5/6">
                                <div class="flex flex-col">
                                    {{-- <span>ID: {{ $post->id }}</span> --}}
                                    <span>
                                        <img class="w-full h-32 object-cover rounded mb-2" src="{{ $post->poster }}"
                                            alt="{{ $post->title }}">
                                    </span>
                                    <span>{{ $post->title }}</span>
                                </div>
                            </button>
                        </a>
                    </div>
                @endforeach
            </div>
        @else
            <br>
            <div id="no-posts-message" class="mt-4 ml-8 text-lg text-gray-600 transition-opacity duration-500">
                <strong>No hay blogs subidos</strong>
            </div>

            <script>
                setTimeout(() => {
                    const msg = document.getElementById('no-posts-message');
                    if (msg) {
                        msg.classList.add('opacity-0');
                        setTimeout(() => msg.remove(), 500); // elimina el elemento del DOM después de la transición
                    }
                }, 3000); // 3 segundos
            </script>
        @endif

    </div>
@endsection
