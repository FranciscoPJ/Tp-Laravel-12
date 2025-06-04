@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Home')

@section('content')
    <div>
        <h1 class="font-semibold text-6xl text-start ml-8 text-gray-800 leading-tight">
            Inicio
        </h1>
    </div>

    <div class="max-w-7xl sm:px-6 lg:px-8">
        <div class="p-1 text-gray-900">
            {{ Auth::check() ? __('Has Iniciado Sesion!') : __('Estas en Pantalla Principal') }}
        </div>
    </div>

    {{-- @php
        $postsOrdenadosDesc = $posts->sortByDesc('id');
    @endphp --}}

    {{-- @dd($posts) --}}
    
    <div class="grid sm:grid-cols-3 md:grid-cols-3 lg:grid-cols-3 w-full h-96 p-6 gap-2">

        <div id="slider" class="w-full h-80 flex justify-center text-center col-span-2 relative overflow-hidden z-0">
            {{-- @foreach ($postsOrdenadosDesc->take(3) as $post) --}}
            @foreach ($posts->take(3) as $post)
                <div
                    class="slide w-full text-white h-full bg-red-500 flex justify-center items-center absolute transition-opacity duration-1000 opacity-0">
                    <img src="{{ $post->poster }} " alt="home">
                </div>
            @endforeach            
        </div>

        {{-- border-2 border-black" --}}
        <div class="w-full h-full flex flex-col col-span-1 items-end gap-1">
            @foreach ($posts->take(3) as $post)
                <div class="w-full h-fit justify-center items-center">
                    <img src="{{ $post->poster }} " alt="home">
                </div>
            @endforeach  
        </div>

    </div>

    <div class="w-full flex flex-col items-start">

        <h2 class="ml-6 text-5xl">
            Explora Nuestros Blogs
        </h2>

        <div class="mt-4 ml-6 text-md">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nobis harum eum esse doloribus iure provident
            architecto? Corporis harum eligendi, magni corrupti aperiam neque perspiciatis, iste facere molestiae obcaecati
            vero.
        </div>

    </div>

    <script>
        const slides = document.querySelectorAll("#slider .slide");
        let current = 0;
        const displayTime = 3000; // milisegundos (3 segundos)

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.remove("opacity-100");
                slide.classList.add("opacity-0");
                if (i === index) {
                    slide.classList.remove("opacity-0");
                    slide.classList.add("opacity-100");
                }
            });
        }

        function startSlider() {
            showSlide(current);
            setInterval(() => {
                current = (current + 1) % slides.length;
                showSlide(current);
            }, displayTime);
        }

        // Iniciar cuando cargue
        window.addEventListener("DOMContentLoaded", startSlider);
    </script>

@endsection
