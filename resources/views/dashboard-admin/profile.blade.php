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
                    <form action="{{ route('profile.destroy', $profile->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus profile ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-400 text-white py-1 px-3 rounded hover:bg-red-600 text-sm">Hapus</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    

    </div>
@endsection