@extends('layouts.dashboard-admin')

@section('content')
<div class="max-w-3xl bg-white mx-auto p-6 rounded text-sm md:text-xs">
    <h1 class="text-2xl font-bold mb-6 border-b-2 pb-2">Edit Sertifikat</h1>

    <form action="{{ route('certificates.update', $certificate->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
            <input type="text" id="judul" name="judul" class="mt-1 p-2 border border-gray-300 rounded w-full" value="{{ $certificate->judul }}" required>
        </div>

        <div class="mb-4">
            <label for="nomor_sertifikat" class="block text-sm font-medium text-gray-700">Nomor Sertifikat</label>
            <input type="text" id="nomor_sertifikat" name="nomor_sertifikat" class="mt-1 p-2 border border-gray-300 rounded w-full" value="{{ $certificate->nomor_sertifikat }}" required>
        </div>

        <div class="mb-4">
            <label for="foto" class="block text-sm font-medium text-gray-700">Foto Sertifikat</label>
            <input type="file" id="foto" name="foto" class="mt-1 p-2 border border-gray-300 rounded w-full">
            
            @if($certificate->foto)
                <p class="block text-sm font-medium text-gray-700 mt-4 mb-2">Sertifikat Sebelumnya</p>
                <img src="{{ asset('storage/' . $certificate->foto) }}" alt="Certificate Image" class="mt-2 border p-3">
            @endif
        </div>        

        <div class="ml-auto text-end mt-8 space-x-2">  
            <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Update</button>
            <a href="{{ route('certificates.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200 hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
