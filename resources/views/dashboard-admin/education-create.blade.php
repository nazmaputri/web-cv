@extends('layouts.dashboard-admin')

@section('content')
<div class="max-w-3xl bg-white mx-auto p-6 shadow-md rounded-md">
    <h2 class="text-2xl font-bold mb-6 border-b-2 pb-2">Tambah Pendidikan</h2>

    <form action="{{ route('education.store') }}" method="POST" class="space-y-4 my-5">
        @csrf
        <div class="">
            <label for="universitas" class="block text-sm font-medium text-gray-700">Universitas</label>
            <input type="text" name="universitas" id="universitas" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200" required>
        </div>

        <div class="flex space-x-3 w-full">
            <div class="w-full">
                <label for="tahun_mulai" class="block text-sm font-medium text-gray-700">Tahun Mulai</label>
                <input type="number" name="tahun_mulai" id="tahun_mulai" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200">
            </div>
    
            <div class="w-full">
                <label for="tahun_akhir" class="block text-sm font-medium text-gray-700">Tahun Akhir</label>
                <input type="text" name="tahun_akhir" id="tahun_akhir" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200" placeholder="Jika Kosong akan otomatis diisi 'Present'">
            </div>
        </div>

        <div class="">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi Gelar</label>
            <textarea name="deskripsi" id="deskripsi" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200"></textarea>
        </div>

        <div class="ml-auto text-end mt-8 space-x-2">  
            <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Tambah</button>
            <a href="{{ route('education.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200 hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
