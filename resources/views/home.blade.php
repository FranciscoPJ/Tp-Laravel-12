@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Home')

@section('content')
    <div class="flex flex-col items-center text-center">
        <h1 class="text-6xl">Pantalla principal</h1>
        <a href="{{route('login')}}">
            <button class="mb-4 mt-4 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">Log In</button>
        </a>
    </div>
@endsection