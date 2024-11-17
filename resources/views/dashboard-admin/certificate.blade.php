@extends('layouts.dashboard-admin')

@section('content')
    <div class="bg-white p-8" x-data="{ popupDelete: false, selectedCertificateId: null }">
        <h1 class="text-3xl font-bold border-b-2 border-gray-300 pb-2 mb-8">Daftar Sertifikat</h1>
        <div class="flex justify-start">
            <a href="{{ route('certificates.create') }}" class="bg-cyan-400 hover:bg-cyan-500 text-white px-4 py-2 rounded">Tambah Sertifikat</a>
        </div>    

        @if(session('success'))
            <div class="mt-4 text-green-400">{{ session('success') }}</div>
        @endif

        <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-6">
            @foreach($certificates as $certificate)
                <div class="bg-white p-4 shadow-md rounded mb-4 hover:shadow-yellow-100 border hover:-translate-y-1 duration-300">
                    <h2 class="font-semibold">{{ $certificate->judul }}</h2>
                    <p>Nomor Sertifikat: {{ $certificate->nomor_sertifikat }}</p>
                    @if($certificate->foto)
                        <img src="{{ asset('storage/' . $certificate->foto) }}" alt="Certificate Image" class="mt-2">
                    @endif
                    <div class="flex justify-end space-x-3 p-3">
                        <a href="{{ route('certificates.edit', $certificate->id) }}" class="bg-blue-400 text-white py-1 px-3 rounded hover:bg-blue-600 text-sm">Edit</a>
                        <button 
                            @click="popupDelete = true; selectedCertificateId = {{ $certificate->id }}" 
                            class="bg-red-400 hover:bg-red-600 text-white text-sm px-3 py-1 rounded">
                            Hapus
                        </button>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Popup Konfirmasi -->
        <div x-show="popupDelete" x-transition 
             class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/3">
                <h3 class="text-lg font-bold text-center mb-4">Konfirmasi Hapus</h3>
                <p class="text-center mb-6">Apakah Anda yakin ingin menghapus sertifikat ini?</p>
                
                <div class="flex justify-evenly">
                    <!-- Tombol batal -->
                    <button @click="popupDelete = false; selectedCertificateId = null" 
                            class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">
                        Batal
                    </button>

                    <!-- Form untuk menghapus data -->
                    <form :action="`{{ route('certificates.destroy', '') }}/${selectedCertificateId}`" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-400 text-white py-1 px-3 rounded hover:bg-red-600 text-sm">
                            Hapus
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
