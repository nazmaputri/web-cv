@extends('layouts.dashboard-admin')
@section('content')
<div class="container mx-auto">

    <!-- Card Container for Title, Button, and About Data -->
    <div class="bg-white shadow-lg rounded-lg p-6 space-y-6">
        <!-- Title -->
        <h1 class="text-3xl font-bold border-b-2  border-gray-300 pb-2">About</h1>

        <!-- Tombol Tambah Profile -->
        @if($aboutData->count() == 0)
        <a href="{{ route('about.create') }}" class="bg-blue-400 text-white py-2 px-4 rounded hover:bg-blue-600 mb-6 inline-block">Tambah Data About</a>
        @else
        <a href="#" class="bg-gray-400 text-white py-2 px-4 rounded cursor-not-allowed mb-6 inline-block">Data About Sudah Ditambahkan</a>
        @endif

        <!-- Success Message -->
        @if (session('success'))
            <div class="text-green-500 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Card Container for About Data -->
        <div class="space-y-6 ">
            @foreach ($aboutData as $about)
            <div class="bg-gray-50 shadow rounded-lg p-6">
                <!-- Nama Section -->
                <h2 class="text-2xl font-bold mb-4 border-b pb-2">{{ $about->judul }}</h2>

                <div class="grid grid-cols-1 lg:grid-cols-2 lg:gap-8">
                    <!-- Left Section (Details) -->
                    <div class="">
                        <div class="text-gray-700 mb-2 border-b pb-2 space-y-2">
                            <p class=""><strong>Deskripsi :</strong></p>
                            <span>{{ $about->deskripsi }}</span>
                        </div>
                        <p class="text-gray-700 mb-2 border-b pb-2"><strong>Umur :</strong> {{ $about->umur }}</p>
                        <p class="text-gray-700 mb-2 border-b pb-2"><strong>Alamat :</strong> {{ $about->alamat }}</p>
                    </div>

                    <!-- Right Section (Contact Info) -->
                    <div class="">
                        <p class="text-gray-700 mb-2 border-b pb-2"><strong>Negara :</strong> {{ $about->negara }}</p>
                        <p class="text-gray-700 mb-2 border-b pb-2"><strong>Email :</strong> {{ $about->email }}</p>
                        <p class="text-gray-700 mb-2 border-b pb-2"><strong>No. Telp :</strong> {{ $about->no_telp }}</p>
                        <p class="text-gray-700 mb-2 border-b pb-2"><strong>Provinsi :</strong> {{ $about->provinsi }}</p>
                        <p class="text-gray-700 mb-2 border-b pb-2"><strong>Kota :</strong> {{ $about->kota }}</p>
                    </div>
                </div>

                <!-- Actions (Edit and Delete) -->
                <div class="flex mt-4 space-x-3 justify-end">
                    <!-- Edit Button Wrapper -->
                    <div class="inline-block bg-blue-400 p-2 rounded-lg hover:shadow-none shadow-lg text-sm hover:bg-blue-600">
                        <a href="{{ route('about.edit', $about->id) }}" class="flex text-white items-center">
                            <span>Edit</span>
                        </a>
                    </div>

                    <!-- Delete Button Wrapper -->
                    <div x-data="{ popupDelete: false }">
                        <!-- Tombol untuk membuka popup -->
                        <button @click="popupDelete = true" class="bg-red-400 hover:bg-red-600 text-sm text-white p-2 rounded-lg">
                            <span>Hapus</span>
                        </button>
                        
                        <!-- Popup Konfirmasi -->
                        <div x-show="popupDelete" x-transition @click.away="popupDelete = false" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center px-4 z-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/3">
                                <h3 class="text-lg font-bold text-center mb-4">Konfirmasi Hapus</h3>
                                <p class="text-center mb-6">Apakah Anda yakin ingin menghapus Data About ini?</p>
                                
                                <div class="flex justify-evenly">
                                    <!-- Tombol batal -->
                                    <button @click="popupDelete = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button>
                                
                                    <!-- Form untuk menghapus data -->
                                    <div class="inline-block bg-red-400 p-2 rounded-lg text-center hover:shadow-none shadow-lg text-sm hover:bg-red-600">
                                        <form action="{{ route('about.destroy', $about->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="flex text-white items-center" onclick="return confirm('Apakah Anda yakin ingin menghapus data about ini?')">
                                                <span>Hapus</span>
                                            </button>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
