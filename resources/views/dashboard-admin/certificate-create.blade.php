@extends('layouts.dashboard-admin')

@section('content')
<div class="max-w-3xl bg-white mx-auto p-6 rounded text-sm md:text-xs">
    <h1 class="text-xl font-bold mb-4">Tambah Sertifikat</h1>

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

        <button type="submit" class="bg-green-500  hover:bg-green-600 hover:-translate-y-1 duration-200 mt-8 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection