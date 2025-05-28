@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Modificar')

@section('content')
    <div class="flex flex-col items-center text-center">
        <h1 class="text-6xl">Modificar post: {{ $post->title }}</h1>

        <form action="/31.laravel/Tp-Laravel-12/public/post/show/{{$post->id}}" method="POST" class="flex flex-col items-center gap-2 mb-4 mt-4">

            @csrf
            @method('PUT')

            <label>Título:</label>
            <input type="text" name="title" value="{{$post->title}}" class="border p-2">

            <label>Poster:</label>
            <input type="text" name="poster" value="{{$post->poster}}" class="border p-2">

            <label>¿Habilitado?</label>
            <input type="checkbox" name="habilitated" value="1" {{ $post->habilitated ? 'checked' : '' }}>

            <label>Contenido:</label>
            <textarea name="content" class="border p-2">{{$post->content}}</textarea>

            <button type="submit" class="mt-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Editar Blog
            </button>
        </form>

        <a href="/31.laravel/Tp-Laravel-12/public/post">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Volver Home</button>
        </a>
    </div>
@endsection
