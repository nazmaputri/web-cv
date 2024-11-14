@extends('layouts.dashboard-admin') <!-- Pastikan ini mengarah ke layout yang umum digunakan -->

@section('title', 'Dashboard Admin')

@section('content')

<!-- Admin Dashboard -->
<div class="bg-white p-6 rounded-lg shadow-lg">

    <!-- Welcome Message -->
    <div class="text-center mb-8">
        <h1 class="text-3xl font-bold text-gray-800">Selamat Datang di Dashboard Admin</h1>
        <p class="text-gray-600 mt-2">Ini adalah halaman utama admin untuk mengelola CV pribadi.</p>
    </div>

    <!-- Stats Section (Example) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Total Skills -->
        <div class="bg-sky-800 text-white p-4 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold">Total Skills</h3>
            <p class="mt-2">15 Skills</p>
        </div>

        <!-- Total Experience -->
        <div class="bg-green-500 text-white p-4 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold">Total Experience</h3>
            <p class="mt-2">5 Years</p> 
        </div>

        <!-- Total Languages -->
        <div class="bg-yellow-400 text-white p-4 rounded-lg shadow-lg">
            <h3 class="text-xl font-semibold">Total Languages</h3>
            <p class="mt-2">2 Languages</p> 
        </div>
    </div>

    <!-- Quick Links -->
    <div class="mt-8 text-center">
        <a href="{{ route('skill.index') }}" class="bg-cyan-500 text-white px-6 py-3 rounded-lg hover:bg-cyan-600">Manage Skills</a>
        <a href="{{ route('experience.index') }}" class="ml-4 bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">Manage Experience</a>
        <a href="{{ route('languages.index') }}" class="ml-4 bg-yellow-500 text-white px-6 py-3 rounded-lg hover:bg-yellow-600">Manage Languages</a>
    </div>

</div>

@endsection
