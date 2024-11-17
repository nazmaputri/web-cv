@extends('layouts.welcome')

@section('title', 'certificate')

@section('content')

<div class="mb-8">
    <div class="space-y-4 pb-4 border-b text-center">
        <div class="flex items-center justify-center text-center text-sky-800 space-x-4">
            <i class="fa-solid fa-medal fa-2x"></i>
            <h3 class="text-2xl font-bold">Certificate<span class="text-gray-900"> Of Competence</span></h3>
        </div>
        <div class="w-1/3 h-1 text-center mx-auto bg-sky-800 rounded-2xl"></div>
    </div>
    {{-- certificate items --}}
    <div data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000" class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-0">
        {{-- certificate --}}
        @foreach ($certificate as $certificateItem)
        <div class="">

            <div class="p-5 lg:p-8 bg-white hover:bg-gray-100 hover:scale-95 border-x border-b border-gray-200 space-y-2 duration-500">
                @if($certificateItem->foto)
                    <img src="{{ asset('storage/' . $certificateItem->foto) }}" alt="Certificate Image" class="w-full h-40 object-cover rounded-md">
                @else
                    <!-- Tidak menampilkan gambar apapun jika tidak ada foto -->
                @endif
                <div class="space-y-2">
                    <h4 class="font-semibold">{{ $certificateItem->judul }}</h4>
                    <p class="text-sky-800 font-semibold italic">
                        <span><i class="fa-solid fa-hashtag"></i></span>{{ $certificateItem->nomor_sertifikat }}
                    </p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
