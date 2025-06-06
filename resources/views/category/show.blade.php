@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Detalle Blog')

@section('content')
    <div>        
        @if ($post)
            <div class="grid sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-1 h-fit">
                
                <div class="flex flex-col px-2 rounded-2xl gap-2 size-auto">                    
                    
                    <div class="text-5xl font-normal">{{ $post->title }}</div>
                    
                    <div class="mt-3 flex justify-center items-center">
                        <img class="w-[90%] h-screen rounded mb-1" src="{{ $post->poster }}"
                            alt="{{ $post->title }}">
                    </div>

                    <div class="font-light first-line:text-3xl">
                        {{ $post->content }} 
                        <br>
                        <div class="pl-1">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam, cum porro. Earum sit, molestias doloribus ea quas voluptas debitis consectetur in! Temporibus minima obcaecati odit numquam impedit necessitatibus doloremque laboriosam?
                        </div>
                    </div>

                </div>

                @auth
                    <a href="{{ route('category.edit', $post->id) }}" class="w-screen flex justify-center">
                        <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400 w-32">Editar</button>
                    </a>
                @endauth
            </div>
        @else
            <h1>No hay blog</h1>
        @endif
    </div>
@endsection
