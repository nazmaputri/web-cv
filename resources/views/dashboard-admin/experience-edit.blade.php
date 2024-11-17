@extends('layouts.dashboard-admin')

@section('content')
<div class="max-w-4xl bg-white mx-auto p-6 rounded shadow-md mt-5">
    <h2 class="text-xl font-bold mb-6 border-b-2 pb-2">Edit Pengalaman Pekerjaan</h2>

    <form action="{{ route('experience.update', $experience->id) }}" method="POST" class="space-y-3">
        @csrf
        @method('PUT')

        <div class="">
            <label for="pekerjaan" class="block font-medium text-gray-700">Pekerjaan</label>
            <input type="text" name="pekerjaan" id="pekerjaan" value="{{ $experience->pekerjaan }}" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200" required>
        </div>
        <div class="flex space-x-4 w-full">
            <div class="w-full">
                <label for="tahun_mulai" class="block font-medium text-gray-700">Tahun Mulai</label>
                <input type="number" name="tahun_mulai" id="tahun_mulai" value="{{ $experience->tahun_mulai }}" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200" required>
            </div>
    
            <div class="w-full">
                <label for="tahun_akhir" class="block font-medium text-gray-700">Tahun Akhir</label>
                <input type="text" name="tahun_akhir" id="tahun_akhir" value="{{ old('tahun_akhir', $experience->tahun_akhir ?? 'Present') }}" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200">
            </div>
        </div>


        <div class="">
            <label for="tempat_kerja" class="block font-medium text-gray-700">Tempat Kerja</label>
            <input type="text" name="tempat_kerja" id="tempat_kerja" value="{{ $experience->tempat_kerja }}" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200" required>
        </div>

        <div class="">
            <label for="deskripsi" class="block font-medium text-gray-700">Deskripsi</label>
            <textarea rows="3" name="deskripsi" id="deskripsi" class="mt-1 block w-full border rounded py-2 px-3 focus:outline-none focus:ring focus:ring-cyan-200">{{ $experience->deskripsi }}</textarea>
        </div>

        <div class="ml-auto text-end mt-8 space-x-2">  
            <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Update</button>
            <a href="{{ route('experience.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200 hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection