@extends('layouts.layout')

{{-- con componente es: <x-layout> ... </x-layout> --}}

@section('title', 'Home')

@section('content')
    <div>
        <h1>Pantalla principal</h1>
        <a href="{{ route('post.index') }}">Listado de blogs</a>
    </div>
@endsection