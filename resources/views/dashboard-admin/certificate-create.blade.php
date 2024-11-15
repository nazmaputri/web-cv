@extends('layouts.dashboard-admin')

@section('content')
<div class="max-w-3xl bg-white mx-auto p-6 rounded text-sm md:text-xs">
    <h1 class="text-xl font-bold mb-4 border-b-2 pb-2">Tambah Sertifikat</h1>

    <form action="{{ route('certificates.store') }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        <div class="mb-4">
            <label for="judul" class="block font-medium text-gray-700">Judul</label>
            <input type="text" id="judul" name="judul" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
        </div>

        <div class="mb-4">
            <label for="nomor_sertifikat" class="block font-medium text-gray-700">Nomor Sertifikat</label>
            <input type="text" id="nomor_sertifikat" name="nomor_sertifikat" class="mt-1 p-2 border border-gray-300 rounded w-full" required>
        </div>

        <div class="mb-4">
            <label for="foto" class="block font-medium text-gray-700">Foto Sertifikat</label>
            <input type="file" id="foto" name="foto" class="mt-1 p-2 border border-gray-300 rounded w-full">
        </div>

        <div class="ml-auto text-end mt-8 space-x-2">  
            <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Tambah</button>
            <a href="{{ route('certificates.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200 hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection