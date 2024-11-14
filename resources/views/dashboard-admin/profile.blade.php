@extends('layouts.dashboard-admin')

@section('content')
    <div class="container mx-auto">
        <h1 class="text-2xl font-bold mb-4">Daftar Profile</h1>
        
        <!-- Tombol Tambah Profile -->
        <a href="{{ route('profile.create') }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700 mb-6 inline-block">Tambah Profile</a>

        <!-- Grid Profile dengan Card Berisi Foto di Kiri dan Detail di Kanan -->
        <div class="space-y-6">
            @foreach ($profile as $profile)
                <div class="bg-white shadow-lg rounded-lg p-6 flex flex-col sm:flex-row items-center space-y-4 sm:space-y-0 sm:space-x-6 relative">
                    
                    <!-- Foto Profil di Kiri -->
                    <div class="flex-shrink-0 w-full sm:w-1/2">
                        <img src="{{ asset('storage/' . $profile->foto) }}" alt="Foto Profil" class="w-full h-64 object-cover rounded-lg">
                    </div>

                    <!-- Detail Profil di Kanan Foto -->
                    <div class="flex-grow w-full sm:w-1/2">
                        <h2 class="text-2xl font-semibold mb-1">{{ $profile->nama }}</h2>
                        <p class="text-gray-600 mb-1">{{ $profile->pekerjaan }}</p>
                        <p class="text-blue-500">
                            <a href="{{ $profile->medsos }}" target="_blank" class="hover:underline">{{ $profile->medsos }}</a>
                        </p>

                        <!-- Link untuk mengunduh CV -->
                        @if($profile->cv_path)
                            <p class="mt-2">
                                <a href="{{ asset('storage/cvs/' . $profile->cv_path) }}" 
                                   class="bg-green-500 text-white py-2 px-4 rounded hover:bg-green-700"
                                   download>
                                    Unduh CV
                                </a>
                            </p>
                        @else
                            <p class="mt-2 text-red-500">CV belum diupload</p>
                        @endif
                    </div>

                    <!-- Tombol Edit dan Hapus di Pojok Kanan Bawah -->
                    <div class="absolute bottom-4 right-4 flex space-x-4">
                        <a href="{{ route('profile.edit', $profile->id) }}" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-700">Edit</a>
                        <form action="{{ route('profile.destroy', $profile->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus profile ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white py-2 px-4 rounded hover:bg-red-700">Hapus</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
