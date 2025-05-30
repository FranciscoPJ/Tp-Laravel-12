@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Añadir')

@section('content')
    <div class="flex flex-col items-center text-center">
        <h1 class="text-6xl font-semibold mb-4">Añadir un Nuevo Post</h1>

        @if (session('success'))
            <p class="text-green-600 mb-4">{{ session('success') }}</p>
        @endif
        {{-- /31.laravel/Tp-Laravel-12/public/post | {{ route('post.store') }} --}}
        <form action="{{ route('post.store') }} " method="POST" class="flex flex-col items-center gap-2 mb-4 mt-4">
            
            @csrf

            <label>Título:</label>
            <input type="text" name="title" value="{{ old('title') }}" class="border p-2">

            <label>Poster:</label>
            <input type="text" name="poster" value="{{ old('poster') }}" class="border p-2">

            <label>¿Habilitado?</label>
            <input type="checkbox" name="habilitated" value="1" {{ old('habilitated') ? 'checked' : '' }}>

            <label>Contenido:</label>
            <textarea name="content" class="border p-2"></textarea>

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Crear Post
            </button>
        </form>

        <a href="{{ route('post.index') }}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Volver Home</button>
        </a>

        {{--  OTRA FORMA DE RUTA:
        <a href="/31.laravel/Tp-Laravel-12/public/post">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Volver Home</button>
        </a> 
        --}}
    </div>
@endsection
