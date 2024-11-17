@extends('layouts.welcome')

@section('title', 'About')

@section('content')
<!-- ABOUT ME SECTION -->

<div class="flex-1 mx-auto p-6 bg-white rounded-lg max-w-6xl">
    <!-- About Me Section -->
        {{-- Title Section --}}
        <div  class="space-y-4 pb-4 text-start mb-6 group">
            <div data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" class="flex items-start justify-start text-start text-sky-800 space-x-4">
                <h2 class="text-2xl font-bold">About <span class="text-gray-900">Me</span></h2>
            </div>
            <div data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500" class="w-1/5 h-1 text-start bg-sky-800 rounded-2xl"></div>
        </div>
    <div class="flex flex-col lg:flex-row space-y-6 lg:space-x-6">
        @foreach ($about as $about)
        <!-- Left Section: Introduction -->
        <div class="flex-1">
            <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500" class="text-xl font-semibold text-gray-800 mb-2">{{ $about->judul }}</p>
            <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="2500" class="text-gray-600">
                {{ $about->deskripsi }}
            </p>
        </div>
        <!-- Right Section: Personal Information -->
        <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="2500" class="flex-1 space-y-2">
            <div class="flex pb-1 justify-between items-center border-b border-gray-300">
                <span class="font-medium bg-sky-700 text-white px-3 py-1 rounded-md">Age:</span>
                <span class="text-gray-800">{{ $about->umur }}</span>
            </div>
            <div class="flex pb-1 justify-between items-center border-b border-gray-300">
                <span class="font-medium bg-sky-700 text-white px-3 py-1 rounded-md">Residence:</span>
                <span class="text-gray-800">{{ $about->negara }}</span>
            </div>
            <div class="flex pb-1 justify-between items-center border-b border-gray-300">
                <span class="font-medium bg-sky-700 text-white px-3 py-1 rounded-md">Freelance:</span>
                <span class="text-gray-800">Availble</span>
            </div>
            <div class="flex pb-1 justify-between items-center border-b border-gray-300">
                <span class="font-medium bg-sky-700 text-white px-3 py-1 rounded-md">Address:</span>
                <span class="text-gray-800">{{ $about->provinsi }}, {{ $about->kota }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- END SECTION ABOUT ME -->

@endsection
