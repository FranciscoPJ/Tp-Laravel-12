@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Detalle')

@section('content')
    <div>
        <h1>Vista detalle del post: {{$post->id}}</h1>

        @if ($post)
            <h1>Titulo: {{$post->title}}</h1>
        @else
            <h1>No hay objeto</h1>
        @endif

        <a href="/31.laravel/Tp-Laravel-12/public/post">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Volver Home</button>
        </a>

        <a href="/31.laravel/Tp-Laravel-12/public/post/edit/{{$post->id}}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Editar</button>
        </a>
    </div>
@endsection