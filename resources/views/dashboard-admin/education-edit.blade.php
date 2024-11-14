@extends('layouts.dashboard-admin')

@section('title', 'Edit Pendidikan')

@section('content')
<div class="container mx-auto mt-5">
    <h2 class="text-2xl font-bold mb-4">Edit Pendidikan</h2>

    <form action="{{ route('education.update', $education->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label for="universitas" class="block text-sm font-medium text-gray-700">Universitas</label>
            <input type="text" name="universitas" id="universitas" value="{{ $education->universitas }}" class="mt-1 block w-full border rounded py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="tahun_mulai" class="block text-sm font-medium text-gray-700">Tahun Mulai</label>
            <input type="number" name="tahun_mulai" id="tahun_mulai" value="{{ $education->tahun_mulai }}" class="mt-1 block w-full border rounded py-2 px-3" required>
        </div>

        <div class="mb-4">
            <label for="tahun_akhir" class="block text-sm font-medium text-gray-700">Tahun Akhir</label>
            <input type="text" name="tahun_akhir" id="tahun_akhir" value="{{ $education->tahun_akhir }}" class="mt-1 block w-full border rounded py-2 px-3">
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="mt-1 block w-full border rounded py-2 px-3">{{ $education->deskripsi }}</textarea>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('education.index') }}" class="ml-2 text-gray-700">Batal</a>
    </form>
</div>
@endsection
