@extends('layouts.dashboard-admin')

@section('content')
<div class="max-w-5xl mx-auto text-sm md:text-xs">
    <!-- Card container -->
    <div class="bg-white p-6 rounded-lg shadow-md">
        <!-- Title -->
        <h2 class="text-2xl font-bold mb-2 border-b-2 pb-2">Daftar Pengalaman Pekerjaan</h2>

        <!-- Tombol Tambah berada di bawah judul -->
        <a href="{{ route('experience.create') }}" class="bg-cyan-400 text-white px-4 py-2 rounded hover:bg-cyan-600  mt-4 inline-block">Tambah Pengalaman</a>

        <!-- Success Message -->
        @if (session('success'))
            <div class="text-green-500 mb-4 mt-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Experience Table -->
        <div class="overflow-x-auto">
            <table class="table-auto min-w-full mt-4 border-collapse">
                <thead>
                    <tr class="bg-cyan-200">
                        <th class="px-4 py-2 border">Pekerjaan</th>
                        <th class="px-4 py-2 border">Tahun Mulai</th>
                        <th class="px-4 py-2 border">Tahun Akhir</th>
                        <th class="px-4 py-2 border">Tempat Kerja</th>
                        <th class="px-4 py-2 border">Deskripsi</th>
                        <th class="px-4 py-2 border">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($experience as $experience)
                    <tr>
                        <td class="px-4 py-2 border">{{ $experience->pekerjaan }}</td>
                        <td class="px-4 py-2 border">{{ $experience->tahun_mulai }}</td>
                        <td class="px-4 py-2 border">{{ $experience->tahun_akhir }}</td>
                        <td class="px-4 py-2 border">{{ $experience->tempat_kerja }}</td>
                        <td class="px-4 py-2 border">{{ $experience->deskripsi }}</td>
                        <td class="px-4 py-2 space-y-2 border">
                            <!-- Edit Button with Icon -->
                            <a href="{{ route('experience.edit', $experience->id) }}" class="inline-flex items-center bg-blue-400 text-white py-1 px-2 rounded hover:bg-blue-600">
                                <!-- SVG Icon for Edit -->
                                <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                    <path d="M441 58.9L453.1 71c9.4 9.4 9.4 24.6 0 33.9L424 134.1 377.9 88 407 58.9c9.4-9.4 24.6-9.4 33.9 0zM209.8 256.2L344 121.9 390.1 168 255.8 302.2c-2.9 2.9-6.5 5-10.4 6.1l-58.5 16.7 16.7-58.5c1.1-3.9 3.2-7.5 6.1-10.4zM373.1 25L175.8 222.2c-8.7 8.7-15 19.4-18.3 31.1l-28.6 100c-2.4 8.4-.1 17.4 6.1 23.6s15.2 8.5 23.6 6.1l100-28.6c11.8-3.4 22.5-9.7 31.1-18.3L487 138.9c28.1-28.1 28.1-73.7 0-101.8L474.9 25C446.8-3.1 401.2-3.1 373.1 25zM88 64C39.4 64 0 103.4 0 152L0 424c0 48.6 39.4 88 88 88l272 0c48.6 0 88-39.4 88-88l0-112c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 112c0 22.1-17.9 40-40 40L88 464c-22.1 0-40-17.9-40-40l0-272c0-22.1 17.9-40 40-40l112 0c13.3 0 24-10.7 24-24s-10.7-24-24-24L88 64z"/>
                                </svg>
                            </a>
                            <!-- Hapus Button with Icon -->
                            <div x-data="{ popupDelete: false }">
                                <!-- Tombol untuk membuka popup -->
                                <button @click="popupDelete = true" class="bg-red-400 hover:bg-red-600 text-white px-2 py-1 rounded">
                                    <!-- SVG Icon for Delete -->
                                    <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                        <path d="M135.2 17.7C140.6 6.8 151.7 0 163.8 0L284.2 0c12.1 0 23.2 6.8 28.6 17.7L320 32l96 0c17.7 0 32 14.3 32 32s-14.3 32-32 32L32 96C14.3 96 0 81.7 0 64S14.3 32 32 32l96 0 7.2-14.3zM32 128l384 0 0 320c0 35.3-28.7 64-64 64L96 512c-35.3 0-64-28.7-64-64l0-320zm96 64c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16zm96 0c-8.8 0-16 7.2-16 16l0 224c0 8.8 7.2 16 16 16s16-7.2 16-16l0-224c0-8.8-7.2-16-16-16z"/>
                                    </svg>
                                </button>
                            
                                <!-- Popup Konfirmasi -->
                                <div x-show="popupDelete" x-transition @click.away="popupDelete = false" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center px-4 z-50">
                                    <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/3">
                                        <h3 class="text-lg font-bold text-center mb-4">Konfirmasi Hapus</h3>
                                        <p class="text-center mb-6">Apakah Anda yakin ingin menghapus data Pengalaman ini?</p>
                                        
                                        <div class="flex justify-evenly">
                                            <!-- Tombol batal -->
                                            <button @click="popupDelete = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button>
                                        
                                            <!-- Form untuk menghapus data -->
                                            <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="inline-flex items-center bg-red-400 text-white px-4 py-2 rounded hover:bg-red-600">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        
    </div>
</div>
@endsection