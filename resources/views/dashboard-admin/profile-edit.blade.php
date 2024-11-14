@extends('layouts.dashboard-admin')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Edit Profile</h1>

    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <form action="{{ route('profile.update', $profile->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="foto" class="block text-sm font-medium text-gray-700">Foto Profil</label>
                <div class="mt-2 mb-4">
                    <!-- Menampilkan foto yang ada jika ada -->
                    @if($profile->foto)
                        <img src="{{ asset('storage/' . $profile->foto) }}" alt="Foto Profil" class="w-32 h-32 rounded-full border border-gray-300">
                    @else
                        <img src="{{ asset('storage/default-profile.png') }}" alt="Foto Profil" class="w-32 h-32 rounded-full border border-gray-300">
                    @endif
                </div>
                <input type="file" name="foto" id="foto" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" name="nama" value="{{ old('nama', $profile->nama) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="pekerjaan" class="block text-sm font-medium text-gray-700">Pekerjaan</label>
                <input type="text" name="pekerjaan" value="{{ old('pekerjaan', $profile->pekerjaan) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="whatsapp" class="block text-sm font-medium text-gray-700">Whatsapp</label>
                <input type="url" name="whatsapp" value="{{ old('whatsapp', $profile->whatsapp) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                <input type="url" name="facebook" value="{{ old('facebook', $profile->facebook) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="twitter" class="block text-sm font-medium text-gray-700">Twitter</label>
                <input type="url" name="twitter" value="{{ old('twitter', $profile->twitter) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                <input type="url" name="instagram" value="{{ old('instagram', $profile->instagram) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="linkedin" class="block text-sm font-medium text-gray-700">Linkedin</label>
                <input type="url" name="linkedin" value="{{ old('linkedin', $profile->linkedin) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="youtube" class="block text-sm font-medium text-gray-700">Youtube</label>
                <input type="url" name="youtube" value="{{ old('youtube', $profile->youtube) }}" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="cv" class="block text-sm font-medium text-gray-700">CV (PDF)</label>
                <input type="file" name="cv" id="cv" class="w-full py-2 px-3 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">Update Profile</button>
        </form>
    </div>
@endsection
