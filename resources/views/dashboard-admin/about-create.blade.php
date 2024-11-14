@extends('layouts.dashboard-admin')

@section('content')
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6">Tambah Data About</h1>

    <form action="{{ route('about.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label>Judul</label>
            <input type="text" name="judul" required class="border p-2 w-full">
        </div>
 
        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-semibold">Deskripsi</label>
            <input type="text" id="deskripsi" name="deskripsi" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="umur" class="block text-sm font-semibold">Umur</label>
            <input type="text" id="umur" name="umur" class="w-full p-2 border border-gray-300 rounded" required>
        </div>

        <div class="mb-4">
            <label for="alamat" class="block text-sm font-semibold">Alamat</label>
            <input type="text" id="alamat" name="alamat" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="negara" class="block text-sm font-semibold">Negara</label>
            <input type="text" id="negara" name="negara" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="email" class="block text-sm font-semibold">Email</label>
            <input type="email" id="email" name="email" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <div class="mb-4">
            <label for="no_telp" class="block text-sm font-semibold">No Telepon</label>
            <input type="text" id="no_telp" name="no_telp" class="w-full p-2 border border-gray-300 rounded">
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
