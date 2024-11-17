@extends('layouts.dashboard-admin')

@section('content')
<div class="container mx-auto p-8">
    <div class="max-w-3xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold mb-6 border-b-2 pb-2">Tambah Data About</h1>

        <form action="{{ route('about.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="block text-sm font-semibold text-gray-700">Judul</label>
                <input type="text" name="judul" required class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
 
            <div class="mb-4">
                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea name="deskripsi" id="deskripsi" rows="4" required class="border p-2 w-full rounded-md">
                    
                </textarea>
            </div>

            <div class="mb-4">
                <label for="umur" class="block text-sm font-semibold text-gray-700">Umur</label>
                <input type="text" id="umur" name="umur" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="alamat" class="block text-sm font-semibold text-gray-700">Alamat Lengkap</label>
                <input type="text" id="alamat" name="alamat" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="negara" class="block text-sm font-semibold text-gray-700">Negara</label>
                <input type="text" id="negara" name="negara" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="provinsi" class="block text-sm font-semibold text-gray-700">Provinsi</label>
                <input type="text" id="provinsi" name="provinsi" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="kota" class="block text-sm font-semibold text-gray-700">Kota</label>
                <input type="text" id="kota" name="kota" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700">Email</label>
                <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="mb-4">
                <label for="no_telp" class="block text-sm font-semibold text-gray-700">No Telepon</label>
                <input type="text" id="no_telp" name="no_telp" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div class="ml-auto text-end mt-8 space-x-2">  
                <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Tambah</button>
                <a href="{{ route('about.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200 hover:bg-gray-600">Batal</a>
            </div>
        </form>
    </div>
</div>
@endsection
