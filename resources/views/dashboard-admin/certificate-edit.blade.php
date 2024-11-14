@extends('layouts.dashboard-admin')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Edit Sertifikat</h1>

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
                <img src="{{ asset('storage/' . $certificate->foto) }}" alt="Certificate Image" class="w-32 h-32 object-cover mt-2">
            @endif
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
    </form>
@endsection
