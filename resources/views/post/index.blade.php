@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Home')

@section('content')
    <div>
        <h1>Listado de Categoria</h1>

        <a href="{{ route('post.create') }}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Agregar un blog </button>
        </a>


        @if (count($posts) > 0)
            <ul>
                @foreach ($posts as $post)
                    <li>
                        <a href="/31.laravel/Tp-Laravel-12/public/post/show/{{$post->id}}">
                            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
                                <div>
                                    Titulo: {{ $post->title}}<br>
                                    Id: {{ $post->id}}
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