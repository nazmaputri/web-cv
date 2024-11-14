@extends('layouts.dashboard-admin')
@section('content')
<div class="container mx-auto">

    <!-- Card Container for Title, Button, and About Data -->
    <div class="bg-white shadow-lg rounded-lg p-6 space-y-6">
        <!-- Title -->
        <h1 class="text-3xl font-bold border-b-2  border-gray-300 pb-2">About</h1>

        <!-- Add New Button -->
        <div class="flex justify-end">
            <a href="{{ route('about.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded shadow justify-end hover:bg-blue-700 inline-block mt-4">Tambah Data About</a>
        </div

        <!-- Success Message -->
        @if (session('success'))
            <div class="text-green-500 mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Card Container for About Data -->
<div class="space-y-6">
    @foreach ($aboutData as $about)
    <div class="bg-gray-50 shadow rounded-lg p-6">
        <!-- Nama Section -->
        <h2 class="text-2xl font-semibold mb-4 border-b pb-2">{{ $about->judul }}</h2>

        <div class="flex flex-wrap">
            <!-- Left Section (Details) -->
            <div class="w-full md:w-1/2 mb-4">
                <p class="text-gray-700 mb-2 border-b pb-2"><strong>Deskripsi:</strong> {{ $about->deskripsi }}</p>
                <p class="text-gray-700 mb-2 border-b pb-2"><strong>Umur:</strong> {{ $about->umur }}</p>
                <p class="text-gray-700 mb-2 border-b pb-2"><strong>Alamat:</strong> {{ $about->alamat }}</p>
            </div>

            <!-- Right Section (Contact Info) -->
            <div class="w-full md:w-1/2 mb-4">
                <p class="text-gray-700 mb-2 border-b pb-2"><strong>Negara:</strong> {{ $about->negara }}</p>
                <p class="text-gray-700 mb-2 border-b pb-2"><strong>Email:</strong> {{ $about->email }}</p>
                <p class="text-gray-700 mb-2 border-b pb-2"><strong>No. Telp:</strong> {{ $about->no_telp }}</p>
            </div>
        </div>

        <!-- Actions (Edit and Delete) -->
        <div class="flex mt-4 space-x-3 justify-end">
            <!-- Edit Button Wrapper -->
            <div class="inline-block bg-blue-500 p-2 rounded-lg">
                <a href="{{ route('about.edit', $about->id) }}" class="text-white hover:underline">Edit</a>
            </div>
            
            <!-- Delete Button Wrapper -->
            <div class="inline-block bg-red-500 p-2 rounded-lg">
                <form action="{{ route('about.destroy', $about->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-white hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>

    </div>
</div>
@endsection
