@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Home')

@section('content')
    <div>
        <h1 class="font-semibold text-6xl text-start ml-8 text-gray-800 leading-tight">
            Inicio
        </h1>
    </div>
    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ Auth::check() ? __('Estas en Pantalla Principal, has Iniciado Sesion!') : __('Estas en Pantalla Principal') }}
                </div>
            </div>
        </div>
    </div>

    {{-- border-2 border-black" --}}
    <div class="grid sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 mt-8 w-[98%] ml-3 mb-3 p-1 gap-2">
        
        <div id="slider" class="w-full flex justify-center text-center col-span-2 relative overflow-hidden">
            <div
                class="slide w-full text-white h-full bg-red-500 flex justify-center items-center absolute transition-opacity duration-1000 opacity-0">
                hola</div>
            <div
                class="slide w-full text-white h-full bg-red-800 flex justify-center items-center absolute transition-opacity duration-1000 opacity-0">
                como</div>
            <div
                class="slide w-full text-white h-full bg-red-950 flex justify-center items-center absolute transition-opacity duration-1000 opacity-0">
                andas?</div>
        </div>

        {{-- border-2 border-black" --}}
        <div class="w-full flex flex-col items-end gap-1">
            <div class="w-80 h-[100px] text-white bg-red-500 flex justify-center items-center">hola</div>
            <div class="w-80 h-[100px] text-white bg-red-800 flex justify-center items-center">como</div>
            <div class="w-80 h-[100px] text-white bg-red-950 flex justify-center items-center">andas?</div>
        </div>

    </div>

    <div class="w-full flex flex-col items-start">
        
        <h2 class="ml-6 text-5xl">
            Explora Nuestros Blogs
        </h2>

        <div class="mt-4 ml-6 text-md">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, nobis harum eum esse doloribus iure provident architecto? Corporis harum eligendi, magni corrupti aperiam neque perspiciatis, iste facere molestiae obcaecati vero.
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
