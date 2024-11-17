@extends('layouts.dashboard-admin')

@section('content')
    <div class="container mx-auto">
        <div class="bg-white shadow-md rounded-lg p-6">
            <h1 class="text-2xl font-bold border-b-2 border-gray-300 pb-2 mb-6">Lengkapi Data Profil Anda</h1>

            <!-- Form Tambah Profil -->
            <form action="{{ route('profile.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-semibold">Nama</label>
                    <input type="text" id="nama" name="nama" class="w-full p-2 border border-gray-300 rounded" required>
                </div>

                <div class="mb-4">
                    <label for="foto" class="block text-sm font-semibold">Foto Profil</label>
                    <input type="file" id="foto" name="foto" class="w-full p-2 border border-gray-300 rounded">
                </div>

                <div class="mb-4">
                    <label for="whatsapp" class="block text-sm font-semibold">WhatsApp</label>
                    <input type="url" id="whatsapp" name="whatsapp" class="w-full p-2 border border-gray-300 rounded" placeholder="https://wa.me/yournumber">
                </div>

                <div class="mb-4">
                    <label for="facebook" class="block text-sm font-semibold">Facebook</label>
                    <input type="url" id="facebook" name="facebook" class="w-full p-2 border border-gray-300 rounded" placeholder="https://facebook.com/yourprofile">
                </div>

                <div class="mb-4">
                    <label for="twitter" class="block text-sm font-semibold">Twitter</label>
                    <input type="url" id="twitter" name="twitter" class="w-full p-2 border border-gray-300 rounded" placeholder="https://twitter.com/yourprofile">
                </div>

                <div class="mb-4">
                    <label for="instagram" class="block text-sm font-semibold">Instagram</label>
                    <input type="url" id="instagram" name="instagram" class="w-full p-2 border border-gray-300 rounded" placeholder="https://instagram.com/yourprofile">
                </div>

                <div class="mb-4">
                    <label for="youtube" class="block text-sm font-semibold">YouTube</label>
                    <input type="url" id="youtube" name="youtube" class="w-full p-2 border border-gray-300 rounded" placeholder="https://youtube.com/yourchannel">
                </div>

                <div class="mb-4">
                    <label for="linkedin" class="block text-sm font-semibold">LinkedIn</label>
                    <input type="url" id="linkedin" name="linkedin" class="w-full p-2 border border-gray-300 rounded" placeholder="https://linkedin.com/in/yourprofile">
                </div>

                <div class="ml-auto text-end mt-8 space-x-2">  
                    <button type="submit" class="bg-blue-400 hover:bg-blue-600 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200">Tambah</button>
                    <a href="{{ route('profile.index') }}" class="ml-2 bg-gray-400 text-white px-4 py-2 rounded hover:-translate-y-1 duration-200 hover:bg-gray-600">Batal</a>
                </div>
            </form>
        </div>
    </div>
@endsection
