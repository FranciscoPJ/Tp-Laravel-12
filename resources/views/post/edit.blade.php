@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Modificar')

@section('content')
    <div>
        <h1>Modificar post: {{$post->title}}</h1>

        <a href="/31.laravel/Tp-Laravel-12/public/post">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Volver Home</button>
        </a>
    </div>
@endsection