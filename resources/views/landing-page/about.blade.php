@extends('layouts.welcome')

@section('title', __('message.about'))

@section('content')
<!-- ABOUT ME SECTION -->

<div class="flex-1 mx-auto p-6 bg-white rounded-lg max-w-6xl">
    <!-- About Me Section -->
        {{-- Title Section --}}
        <div  class="space-y-4 pb-4 text-start mb-6 group">
            <div data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" class="flex items-start justify-start text-start text-sky-800 space-x-4">
                <h2 class="text-2xl font-bold">@lang('message.about') <span class="text-gray-900">@lang('message.me')</span></h2>
            </div>
            <div data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500" class="w-1/5 h-1 text-start bg-sky-800 rounded-2xl"></div>
        </div>
    <div class="flex flex-col lg:flex-row space-y-6 lg:space-x-6">
        @foreach ($about as $data)
        <!-- Left Section: Introduction -->
        <div class="flex-1">
            <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500" class="text-xl font-semibold text-gray-800 mb-2">
                {{ json_decode($data->judul, true)[app()->getLocale()] ?? $data->judul }}
            </p>
            <p data-aos="fade-up" data-aos-delay="300" data-aos-duration="2500" class="text-gray-600">
                {{ json_decode($data->deskripsi, true)[app()->getLocale()] ?? $data->deskripsi }}
            </p>
        </div>
        <!-- Right Section: Personal Information -->
        <div data-aos="fade-left" data-aos-delay="300" data-aos-duration="2500" class="flex-1 space-y-2">
            <div class="flex pb-1 justify-between items-center border-b border-gray-300">
                <span class="font-medium bg-sky-700 text-white px-3 py-1 rounded-md">@lang('message.age'):</span>
                <span class="text-gray-800">{{ $data->umur }}</span>
            </div>
    
            <div class="flex pb-1 justify-between items-center border-b border-gray-300">
                <span class="font-medium bg-sky-700 text-white px-3 py-1 rounded-md">@lang('message.residence'):</span>
                <span class="text-gray-800">{{ $data->negara }}</span>
            </div>
            <div class="flex pb-1 justify-between items-center border-b border-gray-300">
                <span class="font-medium bg-sky-700 text-white px-3 py-1 rounded-md">@lang('message.freelance'):</span>
                <span class="text-gray-800">@lang('message.available')</span>
            </div>
            <div class="flex pb-1 justify-between items-center border-b border-gray-300">
                <span class="font-medium bg-sky-700 text-white px-3 py-1 rounded-md">@lang('message.address'):</span>
                <span class="text-gray-800">{{ $data->provinsi }}, {{ $data->kota }}</span>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- END SECTION ABOUT ME -->

@endsection
