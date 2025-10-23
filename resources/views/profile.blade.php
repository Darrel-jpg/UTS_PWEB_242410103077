@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="relative mx-auto">
        <div class="w-full h-50 rounded-t-3xl bg-linear-to-t from-sky-500 to-indigo-500">

        </div>
        <div class="absolute lg:left-1/12 -translate-x-1/2 top-33 left-1/4">
            <img src="{{ asset('images/' . $foto) }}" alt="Profile" class="w-35 h-35 rounded-full border-5 border-white object-cover">
        </div>
        <div class="w-full h-100 rounded-b-3xl">
            <div class="pt-23 pl-8">
                <h2 class="font-semibold text-3xl text-black mb-3">{{ $username }}</h2>
                <p class="text-lg text-gray-700">{{ $email }}</p>
                <p class="text-lg text-gray-700">{{ $role }}</p>
            </div>
        </div>
    </div>
@endsection