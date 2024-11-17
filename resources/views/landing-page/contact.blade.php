@extends('layouts.welcome')

@section('title', 'contact')

@section('content')
        {{-- Title Section --}}
        <div class="space-y-4 pb-4 text-center mb-6 group">
            <div class="flex items-center justify-center text-center text-sky-800 space-x-4">
                <i class="fa-solid fa-paper-plane fa-2x group-hover:skew-y-12 duration-300"></i>
                <h2 class="text-2xl font-bold">Contact <span class="text-gray-900">Us</span></h2>
            </div>
            <div class="w-1/5 h-1 text-center mx-auto bg-sky-800 rounded-2xl"></div>
        </div>

        @foreach ($about as $aboutItem)
            <!-- CONTACT INFO SECTION -->
            <div class="space-y-1 mx-auto py-6 px-4 grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-8 border-b border-gray-300">
                <div class="flex justify-between space-x-4 items-start break-words">
                    <span data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500" class="font-medium bg-sky-700 rounded-md text-white px-3 py-1">Address:</span>
                    <span data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500" class="text-gray-800 text-right">{{ $aboutItem->alamat }}</span>
                </div>
                <div class="flex justify-between space-x-4 items-start">
                    <span data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500" class="font-medium bg-sky-700 rounded-md text-white px-3 py-1">Email:</span>
                    <span data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500" class="text-gray-800 text-right">{{ $aboutItem->email }}</span>
                </div>
                <div class="flex justify-between space-x-4 items-start">
                    <span data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500" class="font-medium bg-sky-700 rounded-md text-white px-3 py-1">Phone:</span>
                    <span data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500" class="text-gray-800 text-right">{{ $aboutItem->no_telp }}</span>
                </div>
                <div class="flex justify-between space-x-4 items-start">
                    <span data-aos="fade-right" data-aos-delay="300" data-aos-duration="1500" class="font-medium bg-sky-700 rounded-md text-white px-3 py-1">Residence:</span>
                    <span data-aos="fade-left" data-aos-delay="300" data-aos-duration="1500" class="text-gray-800 text-right">{{ $aboutItem->negara }}</span>
                </div>
            </div>
        @endforeach

        {{-- Form Contact --}}
        <div  data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500" class="">
            <form action="#" method="POST" class="py-8 px-4">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <!-- Nama Lengkap -->
                    <div class="flex flex-col">
                        <label for="full-name" class="text-gray-700 font-medium mb-2">Nama Lengkap</label>
                        <input type="text" id="full-name" name="full_name" class="p-2 border outline-none rounded-lg focus:border-sky-700 focus:ring-1 focus:ring-sky-700" required placeholder="Masukkan nama lengkap">
                    </div>
                    <!-- Alamat Email -->
                    <div class="flex flex-col">
                        <label for="email" class="text-gray-700 font-medium mb-2">Alamat Email</label>
                        <input type="email" id="email" name="email" class="p-2 border outline-none rounded-lg focus:border-sky-700 focus:ring-1 focus:ring-sky-700" required placeholder="Masukkan alamat email">
                    </div>
                </div>
    
                <!-- Pesan -->
                <div class="flex flex-col mt-4">
                    <label for="message" class="text-gray-700 font-medium mb-2">Pesan</label>
                    <textarea id="message" name="message" class="p-2 border outline-none rounded-lg focus:border-sky-700 focus:ring-1 focus:ring-sky-700" rows="4" required placeholder="Masukkan pesan"></textarea>
                </div>
    
                <!-- Tombol Kirim -->
                <div class="mt-8 items-end justify-end text-end">
                    <button type="submit" class="bg-white font-semibold text-sky-800 px-6 py-2 border-2 border-sky-800 rounded-lg hover:text-white hover:bg-sky-800 hover:-translate-y-1 focus:outline-none duration-300">Kirim</button>
                </div>
            </form>
        </div>

@endsection