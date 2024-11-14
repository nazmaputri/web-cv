@extends('layouts.dashboard-admin')

@section('content')
<div class="container">
    <h1 class="text-2xl font-bold mb-4">Edit Bahasa</h1>
    
    <form action="{{ route('languages.update', $language->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="bahasa" class="block text-gray-700">Bahasa:</label>
            <input type="text" name="bahasa" id="bahasa" value="{{ $language->bahasa }}" class="w-full p-2 border rounded" required>
        </div>
        <div class="mb-4">
            <label for="persentase_bar" class="block text-gray-700">Persentase:</label>
            <input type="number" name="persentase_bar" id="persentase_bar" value="{{ $language->persentase_bar }}" class="w-full p-2 border rounded" min="0" max="100">
        </div>
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
        <a href="{{ route('languages.index') }}" class="text-gray-500 ml-2">Batal</a>
    </form>
</div>
@endsection
