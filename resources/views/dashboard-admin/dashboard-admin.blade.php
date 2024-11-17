@extends('layouts.dashboard-admin') 

@section('content')

<!-- Admin Dashboard -->
<div class="bg-gray-50 p-8 rounded-lg shadow-xl">
    @if(session('success'))
        <div class="text-white bg-green-400 mb-3 text-center justify-center w-auto p-1 rounded-sm">
            {{ session('success') }}
        </div>
    @endif

    <!-- Welcome Message -->
    <div class="text-center mb-10">
        <h1 class="text-3xl font-bold text-gray-800">Selamat Datang di Dashboard Admin</h1>
        <p class="text-gray-600 mt-2 text-lg">Halaman utama untuk mengelola CV pribadi Anda.</p>
    </div>

    <!-- Stats Section (Dinamis) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Total Skills -->
        <div class="bg-gradient-to-r from-sky-800 to-sky-500 text-white p-6 rounded-lg shadow-lg flex flex-col items-center hover:shadow-sky-300 duration-300">
            <h3 class="text-lg font-semibold">Total Keterampilan</h3>
            <p class="text-3xl font-bold mt-2">{{ $totalSkills }}</p>
        </div>

        <!-- Total Experience -->
        <div class="bg-gradient-to-r from-green-500 to-green-300 text-white p-6 rounded-lg shadow-lg flex flex-col items-center hover:shadow-green-300 duration-300">
            <h3 class="text-lg font-semibold">Total Pengalaman</h3>
            <p class="text-3xl font-bold mt-2">{{ $totalExperience }}</p> 
        </div>

        <!-- Total Languages -->
        <div class="bg-gradient-to-r from-yellow-600 to-yellow-500 text-white p-6 rounded-lg shadow-lg flex flex-col items-center hover:shadow-yellow-300 duration-300">
            <h3 class="text-lg font-semibold">Total Bahasa</h3>
            <p class="text-3xl font-bold mt-2">{{ $totalLanguages }}</p> 
        </div>
    </div>

    <!-- Quick Links -->
    <div class="mt-12 flex justify-center">
        <div class="text-center space-y-4 space-x-4">
            <a href="{{ route('skill.index') }}" class="bg-sky-500 text-white px-8 py-3 rounded-lg hover:bg-sky-600 shadow-md transition-transform transform focus:scale-90 inline-block">Update Keterampilan</a>
            <a href="{{ route('experience.index') }}" class="bg-green-500 text-white px-8 py-3 rounded-lg hover:bg-green-600 shadow-md transition-transform transform focus:scale-90 inline-block">Update Pengalaman Kerja</a>
            <a href="{{ route('skill.index') }}" class="bg-yellow-500 text-white px-8 py-3 rounded-lg hover:bg-yellow-600 shadow-md transition-transform transform focus:scale-90 inline-block">Update Bahasa</a>
        </div>
    </div>

</div>

@endsection
