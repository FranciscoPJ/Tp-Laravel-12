{{-- <x-app-layout> --}}
@extends('layouts.layout')

@section('title', 'Dashboard')

@section('content')
    {{-- <x-slot name="header"> --}}
        <div class="justify-center">
            <h2 class="font-semibold text-6xl text-start ml-8 text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </div>
        
    {{-- </x-slot> --}}

    <div class="py-1">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
@endsection
{{-- </x-app-layout> --}}
