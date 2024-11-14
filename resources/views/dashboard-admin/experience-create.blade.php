@extends('layouts.dashboard-admin')

@section('title', 'Tambah Experience')

@section('content')
<div class="max-w-4xl bg-white mx-auto p-6 rounded shadow-md mt-5">
    <h2 class="text-xl font-bold mb-6">Tambah Experience</h2>

    <form action="{{ route('experience.store') }}" method="POST" class="space-y-3">
        @csrf
        <div class="">
            <label for="pekerjaan" class="block font-medium text-gray-700">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200" required>
        </div>

        <div class="flex space-x-4 w-full">
            <div class="w-full">
                <label for="tahun_mulai" class="block font-medium text-gray-700">Tahun Mulai</label>
                <input type="number" name="tahun_mulai" id="tahun_mulai" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200" required>
            </div>
    
            <div class="w-full">
                <label for="tahun_akhir" class="block font-medium text-gray-700">Tahun Akhir</label>
                <input type="text" name="tahun_akhir" id="tahun_akhir" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200">
            </div>
        </div>

        <div class="">
            <label for="tempat_kerja" class="block font-medium text-gray-700">Tempat Kerja</label>
            <input type="text" name="tempat_kerja" id="tempat_kerja" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200" required>
        </div>

        <div class="">
            <label for="deskripsi" class="block font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200">
            </textarea>
        </div>

        <div class="pt-6">
            <button type="submit" class="bg-green-500 hover:bg-green-600 hover:-translate-y-1 duration-200 text-white px-4 py-2 rounded">Tambah</button>
            <a href="{{ route('experience.index') }}" class="ml-2  px-4 py-2 rounded hover:bg-gray-100 text-gray-700">Batal</a>
        </div>
    </form>
</div>
@endsection