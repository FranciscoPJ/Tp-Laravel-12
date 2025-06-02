@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Añadir')

@section('content')
    <div>
        <h1 class="font-semibold text-6xl text-start ml-8 text-gray-800 leading-tight">Añade un nuevo blog</h1>

        @if (session('success'))
            <p class="text-green-600 mb-4">{{ session('success') }}</p>
        @endif
        
        <form action="{{ route('post.store') }} " method="POST" class="flex flex-col items-center gap-2 mb-4 mt-4">

            @csrf

            <label class="text-start w-[600px] ml-2">Título:</label>
            <input type="text" name="title" value="{{ old('title') }}"
                class="w-[600px] shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe un titulo...">

            <label class="text-start w-[600px] ml-2">Poster:</label>
            <input type="text" name="poster" value="{{ old('poster') }}"
                class="w-[600px] shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" placeholder="Escribe una URL de un poster...">

            <label class="text-start w-[600px] ml-2">Categoría:</label>
            <div class="inline-block relative">
                <select name="id_category"
                    class="block w-[600px] shadow appearance-none border rounded py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                    <option value="">Selecciona una categoría</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('id_category') == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
                <div class="pointer-events-none absolute inset-y-0 right-0.5 flex items-center px-2 text-gray-700">
                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                    </svg>
                </div>
            </div>

            <div class="flex mb-4 mt-4 w-[600px] shadow appearance-none border rounded py-3 px-1 bg-white bg-opacity-75">
                <label  for="default-checkbox" class="text-start">¿Habilitado?</label>
                <input type="checkbox" name="habilitated" value="1" {{ old('habilitated') ? 'checked' : '' }} class="w-4 ml-2 mt-0.5">
            </div>

            <label class="text-start w-[600px] ml-2">Contenido:</label>
            <textarea name="content" rows="2" cols="76" class="shadow appearance-none border py-2 px-3 rounded-lg focus:outline-none focus:shadow-outline" placeholder="Escribe un contenido..."></textarea>

            <div class="w-[600px] mt-4 flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Crear Post
                </button>
            </div>
            
        </form>

        {{-- <a href="{{ route('home') }}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Volver Home</button>
        </a>        --}}
    </div>
@endsection
