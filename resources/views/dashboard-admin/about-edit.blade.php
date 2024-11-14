@extends('layouts.dashboard-admin')

@section('content')
<div class="container mx-auto">
    <h1 class="text-3xl font-bold mb-6">Edit Data About</h1>

    <!-- Form Inside a Card Layout -->
    <div class="bg-white shadow-lg rounded-lg p-6">
        <form action="{{ route('about.update', $about->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Card Content: Split Into Left and Right Sections -->
            <div class="flex space-x-8">
                <!-- Left Section (Details) -->
                <div class="w-1/2">
                    <div class="mb-4">
                        <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                        <input type="text" name="judul" id="judul" value="{{ old('judul', $about->judul) }}" required class="border p-2 w-full rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                        <textarea name="deskripsi" id="deskripsi" rows="4" required class="border p-2 w-full rounded-md">{{ old('deskripsi', $about->deskripsi) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="umur" class="block text-sm font-medium text-gray-700">Umur</label>
                        <input type="number" name="umur" id="umur" value="{{ old('umur', $about->umur) }}" required class="border p-2 w-full rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                        <input type="text" name="alamat" id="alamat" value="{{ old('alamat', $about->alamat) }}" required class="border p-2 w-full rounded-md">
                    </div>
                </div>

                <!-- Right Section (Contact Info) -->
                <div class="w-1/2">
                    <div class="mb-4">
                        <label for="negara" class="block text-sm font-medium text-gray-700">Negara</label>
                        <input type="text" name="negara" id="negara" value="{{ old('negara', $about->negara) }}" required class="border p-2 w-full rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email', $about->email) }}" required class="border p-2 w-full rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="no_telp" class="block text-sm font-medium text-gray-700">No. Telp</label>
                        <input type="text" name="no_telp" id="no_telp" value="{{ old('no_telp', $about->no_telp) }}" required class="border p-2 w-full rounded-md">
                    </div>
                </div>
            </div>

            <!-- Update Button -->
            <div class="mt-6">
                <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-700">Update</button>
            </div>
        </form>
    </div>
</div>
@endsection
