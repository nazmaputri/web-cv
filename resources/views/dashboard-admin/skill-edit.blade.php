@extends('layouts.dashboard-admin')

@section('content')
<div class="container mx-auto px-4 py-6 bg-white p-6">
    <h1 class="text-2xl font-bold mb-6 border-b-2 pb-2">Edit Keterampilan</h1>

    <form action="{{ route('skill.update', $skill->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="skill" class="block text-gray-700">Nama Keterampilan:</label>
            <input type="text" name="skill" id="skill" class="w-full border border-gray-300 rounded mt-2 p-2" value="{{ $skill->skill }}" required>
        </div>

        <div class="mb-4">
            <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" class="mt-1 block w-full border rounded py-2 px-3">{{ $skill->deskripsi }}</textarea>
        </div>

        <div class="ml-auto text-end mt-8 space-x-2">  
            <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Update</button>
            <a href="{{ route('skill.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200 hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
