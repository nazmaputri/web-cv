@extends('layouts.dashboard-admin')

@section('content')
    <div class="container mx-auto bg-white p-6 rounded-sm">
        <h1 class="text-2xl font-bold mb-4 border-b-2 pb-2">Daftar Profile</h1>
        
    <!-- Menampilkan Pesan Sukses -->
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded mb-4">
        {{ session('success') }}
    </div>
   @endif

    <!-- Tombol Tambah Profile -->
    @if($profile->count() == 0)
    <a href="{{ route('profile.create') }}" class="bg-blue-400 text-white py-2 px-4 rounded hover:bg-blue-600 mb-6 inline-block">Tambah Profile</a>
    @else
    <a href="#" class="bg-gray-400 text-white py-2 px-4 rounded cursor-not-allowed mb-6 inline-block">Profil Sudah Ditambahkan</a>
    @endif

    <!-- Profile Card Tanpa Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 max-w-full mx-auto">
        @foreach ($profile as $profile)
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                
                <!-- Foto Profil di Atas -->
                <div class="w-full">
                    <img src="{{ asset('storage/' . $profile->foto . '?t=' . time()) }}" alt="Foto Profil" class="w-full h-auto object-cover">
                </div>
    
                <!-- Detail Profil di Bawah Foto -->
                <div class="p-4 text-center">
                    <h2 class="text-xl font-semibold mb-1">{{ $profile->nama }}</h2>
                    <p class="text-gray-600 mb-1 text-sm">{{ $profile->pekerjaan }}</p>
                    <p class="text-blue-500 text-sm">
                        <a href="{{ $profile->medsos }}" target="_blank" class="hover:underline">{{ $profile->medsos }}</a>
                    </p>
    
                    <!-- Link untuk mengunduh CV -->
                        <p class="mt-2">
                            <a href="{{ route('download.cv') }}" class="bg-green-400 text-white px-4 py-2 rounded hover:bg-green-600">Unduh CV</a>
                        </p>
                </div>
    
                <!-- Tombol Edit dan Hapus di Bawah -->
                <div class="flex justify-center space-x-3 p-3">
                    <a href="{{ route('profile.edit', $profile->id) }}" class="bg-blue-400 text-white py-1 px-3 rounded hover:bg-blue-600 text-sm">Edit</a>
                    <div x-data="{ popupDelete: false }">
                        <!-- Tombol untuk membuka popup -->
                        <button @click="popupDelete = true" class="bg-red-400 hover:bg-red-600 text-white text-sm px-3 py-1 rounded">
                            <span>Hapus</span>
                        </button>
                    
                        <!-- Popup Konfirmasi -->
                        <div x-show="popupDelete" x-transition @click.away="popupDelete = false" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center px-4 z-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/3">
                                <h3 class="text-lg font-bold text-center mb-4">Konfirmasi Hapus</h3>
                                <p class="text-center mb-6">Apakah Anda yakin ingin menghapus data Profil ini?</p>
                                
                                <div class="flex justify-evenly">
                                    <!-- Tombol batal -->
                                    <button @click="popupDelete = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button>
                                
                                    <!-- Form untuk menghapus data -->
                                    <form action="{{ route('profile.destroy', $profile->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus profile ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-400 text-white py-1 px-3 rounded hover:bg-red-600 text-sm">Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection