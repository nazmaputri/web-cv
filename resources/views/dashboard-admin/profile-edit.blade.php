@extends('layouts.dashboard-admin')

@section('content')
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <!-- Judul -->
        <h1 class="text-2xl font-bold mb-6 text-center border-b-2 pb-2">Edit Profile</h1>

        @if ($errors->any())
            <div class="bg-red-500 text-white p-4 rounded-md mb-4">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
        
            <!-- Foto Profil -->
            <div class="flex justify-center mb-4">
                @if($profile->foto)
                    <img src="{{ asset('storage/' . $profile->foto) }}" alt="Foto Profil" class="w-32 h-32 rounded-full border border-gray-300">
                @else
                    <img src="{{ asset('storage/default-profile.png') }}" alt="Foto Profil" class="w-32 h-32 rounded-full border border-gray-300">
                @endif
            </div>
            <div class="mb-4">
                <label for="foto" class="block text-sm font-medium text-gray-700">Foto Profil</label>
                <input type="file" name="foto" id="foto" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('foto')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <!-- Nama -->
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $profile->nama) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
                @error('name')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <!-- Whatsapp -->
            <div class="mb-4">
                <label for="whatsapp" class="block text-sm font-medium text-gray-700">Whatsapp</label>
                <input type="url" name="whatsapp" value="{{ old('whatsapp', $profile->whatsapp) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('whatsapp')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <!-- Facebook -->
            <div class="mb-4">
                <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                <input type="url" name="facebook" value="{{ old('facebook', $profile->facebook) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('facebook')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <!-- Twitter -->
            <div class="mb-4">
                <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter</label>
                <input type="url" name="twitter" value="{{ old('twitter', $profile->twitter) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('twitter')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <!-- Instagram -->
            <div class="mb-4">
                <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                <input type="url" name="instagram" value="{{ old('instagram', $profile->instagram) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('instagram')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <!-- Linkedin -->
            <div class="mb-4">
                <label for="linkedin" class="block text-sm font-medium text-gray-700">Linkedin</label>
                <input type="url" name="linkedin" value="{{ old('linkedin', $profile->linkedin) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('linkedin')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <!-- Youtube -->
            <div class="mb-4">
                <label for="youtube" class="block text-sm font-medium text-gray-700">Youtube</label>
                <input type="url" name="youtube" value="{{ old('youtube', $profile->youtube) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
                @error('youtube')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
        
            <div class="mt-8 text-right space-x-2">  
                <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Update</button>
                <a href="{{ route('profile.index') }}" class="bg-gray-400 text-white px-4 py-2 rounded hover:bg-gray-600 hover:-translate-y-1 duration-200">Batal</a>
            </div>
        </form>        
    </div>
@endsection
