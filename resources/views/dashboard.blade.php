@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-3xl font-bold mb-10">Welcome, {{ $username ?? 'Who?' }}!!</h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3">
        <div class="bg-blue-600 w-2xs text-white rounded-xl shadow-xl px-6 py-10 flex items-center gap-10">
            <div class="text-4xl">
                <i class="fa-solid fa-users"></i>
            </div>
            <div>
                <h3 class="text-sm font-medium">Total Employees</h3>
                <p class="text-3xl font-bold mt-1">{{ $jmlData }}</p>
            </div>
        </div>
    </div>
@endsection