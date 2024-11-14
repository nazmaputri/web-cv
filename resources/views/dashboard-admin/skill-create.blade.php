@extends('layouts.dashboard-admin')

@section('content')
<div class="max-w-3xl shadow-md mx-auto bg-white p-6 rounded text-sm">
    <h1 class="text-2xl font-bold mb-6">Tambah Keterampilan</h1>

    <form action="{{ route('skill.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="skill" class="block text-gray-700">Nama Keterampilan:</label>
            <input type="text" name="skill" id="skill" class="w-full border-gray-300 border rounded mt-2 p-2" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="mt-1 block w-full border rounded py-2 px-3"></textarea>
        </div>

        <button type="submit" class="bg-green-500 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
