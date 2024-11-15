@extends('layouts.dashboard-admin')

@section('content')
<div class="container mx-auto bg-white p-6">
    <h1 class="text-2xl font-bold mb-4 border-b-2 pb-2">Tambah Bahasa</h1>
    
    <form action="{{ route('languages.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="bahasa" class="block text-gray-700">Bahasa:</label>
            <input type="text" name="bahasa" id="bahasa" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="persentase_bar" class="block text-gray-700">Persentase:</label>
            <input type="number" name="persentase_bar" id="persentase_bar" class="w-full p-2 border rounded" min="0" max="100">
        </div>
        <div class="ml-auto text-end mt-8 space-x-2">  
            <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Tambah</button>
            <a href="{{ route('skill.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200 hover:bg-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
