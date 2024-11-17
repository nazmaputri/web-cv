@extends('layouts.welcome')

@section('title', 'resume')

@section('content')
  <!-- Resume Title -->
    <div class="space-y-4 pb-4 text-center border-b border-gray-300">
        <div data-aos="fade-down" data-aos-delay="300" data-aos-duration="1000" class="flex items-center justify-center text-center text-sky-800 space-x-4">
            <h3 class="text-2xl font-bold tracking-wide">R<span class="text-gray-900">esume</span></h3>
        </div>
    </div>

  <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="2500" class="flex flex-col md:flex-row md:space-x-4 px-4 md:px-0">
    <!-- Pengalaman Kerja -->
    <div class="w-full md:w-1/2">
        <h2 data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500" class="text-xl font-semibold text-sky-800 flex items-center space-x-2 py-4 border-b border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><path fill="#1a4ea8" d="M184 48l144 0c4.4 0 8 3.6 8 8l0 40L176 96l0-40c0-4.4 3.6-8 8-8zm-56 8l0 40L64 96C28.7 96 0 124.7 0 160l0 96 192 0 128 0 192 0 0-96c0-35.3-28.7-64-64-64l-64 0 0-40c0-30.9-25.1-56-56-56L184 0c-30.9 0-56 25.1-56 56zM512 288l-192 0 0 32c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32-14.3-32-32l0-32L0 288 0 416c0 35.3 28.7 64 64 64l384 0c35.3 0 64-28.7 64-64l0-128z"/></svg>
            <span>Experience</span>
        </h2>

        
        @foreach ($experience as $experience)
        <!-- MikroTik Trainer -->
        <div  class="">
            <ol class="relative border-s border-gray-200">
                <li class="resume-item mb-5 ms-4 py-4 border-b border-gray-400 group">
                    <div class="absolute w-3 h-3 bg-sky-800 rounded-full mt-1.5 -start-1.5 border border-white group-hover:scale-125 duration-500"></div>
                    <time class="inline-block px-2 py-0.5 text-xs text-blue-900 border border-blue-900 group-hover:bg-sky-800 group-hover:text-white rounded-md  group-hover:translate-x-1 duration-500">
                        {{ $experience->tahun_mulai }} - {{ $experience->tahun_akhir }}
                    </time>
                    <h3 class="text-lg font-bold text-[#333]">{{ $experience->tempat_kerja }}</h3>
                    <p class="text-sm text-blue-600">{{ $experience->pekerjaan }}</p>
                    <p class="text-sm text-gray-600">{{ $experience->deskripsi }}</p>
                </li>
            </ol>
        </div>
        @endforeach
    </div>
    <!-- Pembatas Vertikal -->
    <div class="border-l-2 border-blue-200 my-3"></div>

    <!-- Pendidikan -->
    <div class="w-full md:w-1/2">
        <h2 data-aos="zoom-in" data-aos-delay="300" data-aos-duration="1500" class="text-xl font-semibold text-sky-800 flex items-center space-x-2 py-4 border-b border-gray-300">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" width="24" viewBox="0 0 512 512"><path fill="#1a4ea8" d="M0 144L256 0 512 144l0 48L0 192l0-48zM0 512l0-48 64-48 0-192 64 0 0 192 40 0 0-192 64 0 0 192 48 0 0-192 64 0 0 192 40 0 0-192 64 0 0 192 64 48 0 48L0 512zM256 144a32 32 0 1 0 0-64 32 32 0 1 0 0 64z"/></svg>
            <span>Education</span>
        </h2>

        @foreach ($education as $education)
        <!-- Pakuan University -->
        <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="2000" class="">
            <ol class="relative border-s border-gray-200">            
                <li class="resume-item mb-5 ms-4 py-4 border-b border-gray-400 group">
                    <div class="absolute w-3 h-3 bg-sky-800 rounded-full mt-1.5 -start-1.5 border border-white group-hover:scale-125 duration-500"></div>
                    <time class="inline-block px-2 py-0.5 text-xs text-blue-900 border border-blue-900 group-hover:bg-sky-800 group-hover:text-white rounded-md  group-hover:translate-x-1 duration-500">
                        {{ $education->tahun_mulai }} - {{ $education->tahun_akhir }}
                    </time>
                    <h3 class="text-lg font-bold  group-hover:translate-x-1 duration-500">
                        <a href="https://ilkom.unpak.ac.id/" class="text-sky-700 hover:text-sky-800" target="_blank">
                            {{ $education->universitas }}
                        </a>
                    </h3>
                    <p class="text-sm text-gray-700">{{ $education->deskripsi }}</p>
                </li>
            </ol>
        </div>
        @endforeach

    </div>
  </div>
{{-- Resume Section End --}}


{{-- skill & language --}}
<div class="w-full mx-auto text-left mt-12">
    <h3 class="text-2xl py-2 border-b-4 border-sky-800 mb-8 uppercase font-bold tracking-wider">
      <span class="text-sky-800">Ski</span>lls
    </h3>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
      
      <!-- Skills Section -->
        <div class="px-4 lg:p-0">
            <h3 class="text-xl py-3 bg-gray-100 border-b-2 border-gray-300 pl-3 rounded-t-md font-semibold flex items-center">
                <i class="fa-solid fa-id-card mr-2 text-sky-800"></i> Skills
            </h3>
            <ul class="list-disc pl-8 py-4 leading-loose border border-gray-200 rounded-b-md">
                @foreach($skill as $skill)
                    <li class="font-medium">{{ $skill->skill }} : {{ $skill->deskripsi }}</li>
                @endforeach
            </ul>
        </div>

      
      <!-- Language Section -->
      <div class="px-4 lg:p-0">
        <h3 class="text-xl py-3 space-x-2 bg-gray-100 border-b-2 border-gray-300 pl-3 rounded-t-md font-semibold flex items-center">
            <i class="fa-solid fa-earth-europe  text-sky-800"></i> 
            <span>Language</span>
        </h3>                      
        <ul class="pl-8 pt-4 border border-gray-200 rounded-b-md">
            @foreach ($languages as $language)
                <li class="flex items-center py-2">
                <span class="font-medium">{{ $language->bahasa }}</span>
            @endforeach
        </ul>
      </div>
    
    </div>
</div>


@endsection