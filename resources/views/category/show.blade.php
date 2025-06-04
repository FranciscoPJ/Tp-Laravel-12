@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Detalle Blog')

@section('content')
    <div>
        {{-- <h1 class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 font-semibold text-6xl text-start ml-8 text-gray-800 leading-tight">
            Detalle del Blog: {{ $post->title }}
        </h1> --}}

        @if ($post)
            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 p-4 h-screen">
                <div class="flex flex-col py-4 px-2 rounded-2xl bg-gray-300 gap-2 size-auto">
                    {{-- <div>Id: {{ $post->id }} </div> --}}
                    <div class="text-3xl font-medium">{{ $post->title }}</div>
                    <div class="mt-2 mb-2"><img class="w-screen h-full rounded mb-2" src="{{ $post->poster }}"
                            alt="{{ $post->title }}">
                    </div>
                    <div class="font-light">{{ $post->content }} </div>
                </div>

                @auth
                    <a href="{{ route('category.edit', $post->id) }}" class="w-screen flex justify-center">
                        <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400 w-32">Editar</button>
                    </a>
                @endauth
            </div>
        @else
            <h1>No hay objeto</h1>
        @endif
    </div>
@endsection
