@extends('layouts.dashboard-admin')

@section('content')
<div class="shadow-md mx-auto bg-white p-6 rounded text-sm">
    <h1 class="text-2xl font-bold mb-6 border-b-2 pb-2">Daftar Keterampilan</h1>
    
    <!-- Tombol Tambah Keterampilan -->
    <a href="{{ route('skill.create') }}" class="bg-cyan-400 hover:bg-cyan-600 text-white text-sm px-4 py-2 mb-3 inline-block rounded">Tambah Keterampilan</a>

    <!-- Success Message -->
    @if (session('success'))
    <div class="text-green-500 mb-4 mt-4">
        {{ session('success') }}
    </div>
  @endif

    <!-- Tabel daftar keterampilan -->
    <div class="overflow-x-auto">
        <table class="table-auto min-w-full text-sm">
            <thead>
                <tr class="bg-cyan-200">
                    <th class="py-2 px-4">Keterampilan</th>
                    <th class="py-2 px-4">Deskripsi</th>
                    <th class="py-2 px-4 justify-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($skills as $skill)
                <tr class="hover:bg-gray-100 border-b">
                    <td class="py-2 px-4">{{ $skill->skill }}</td>
                    <td class="py-2 px-4">{{ $skill->deskripsi }}</td>
                    <td class="flex p-2 space-x-2 justify-center">
                        <a href="{{ route('skill.edit', $skill->id) }}" class="bg-blue-400 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                        
                        <div x-data="{ modalDelete: false }">
                            <!-- Tombol untuk membuka popup -->
                            <button @click="modalDelete = true" class="bg-red-400 hover:bg-red-600 text-white px-3 py-1 rounded">
                                Hapus
                            </button>
                        
                            <!-- Popup Konfirmasi -->
                            <div x-show="modalDelete" x-transition @click.away="modalDelete = false" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center px-4 z-50">
                                <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/3">
                                    <h3 class="text-lg font-bold text-center mb-4">Konfirmasi Hapus</h3>
                                    <p class="text-center mb-6">Apakah Anda yakin ingin menghapus keterampilan ini?</p>
                                    
                                    <div class="flex justify-evenly">
                                        <!-- Tombol batal -->
                                        <button @click="modalDelete = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button>
                        
                                        <!-- Form untuk menghapus data -->
                                        <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" class="inline-block">
                                            @csrf
                                            @method('DELETE')
                        
                                            <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-700">Hapus</button>
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

<div class="shadow-md mx-auto bg-white p-6 rounded text-sm my-8">
    <h1 class="text-2xl font-bold mb-6 border-b-2 pb-2">Daftar Keterampilan Bahasa</h1>
    
    <a href="{{ route('languages.create') }}" class="bg-cyan-400 hover:bg-cyan-600 text-white px-4 py-2  mb-4 rounded">Tambah Keterampilan Bahasa</a>
    
    <!-- Success Message -->
     @if (session('success'))
     <div class="text-green-500 mb-4 mt-6">
         {{ session('success') }}
     </div>
   @endif

    <div class="overflow-x-auto mt-5">
        <table class="table-auto min-w-full text-sm">
            <thead>
                <tr class="bg-cyan-200">
                    <th class="px-4 py-2">Bahasa</th>
                    <th class="px-4 py-2">Persentase</th>
                    <th class="px-4 py-2 justify-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($languages as $language)
                    <tr class="hover:bg-gray-100 border-b">
                        <td class="px-4 py-2">{{ $language->bahasa }}</td>
                        <td class="px-4 py-2">{{ $language->persentase_bar }}%</td>
                        <td class="flex p-2 space-x-2 justify-center">
                            <a href="{{ route('languages.edit', $language->id) }}" class="bg-blue-400 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                            
                            <div x-data="{ modalDelete: false }">
                                <!-- Tombol untuk membuka popup -->
                                <button @click="modalDelete = true" class="bg-red-400 hover:bg-red-600 text-white px-3 py-1 rounded">
                                    Hapus
                                </button>
                            
                                <!-- Popup Konfirmasi -->
                                <div x-show="modalDelete" x-transition @click.away="modalDelete = false" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center px-4 z-50">
                                    <div class="bg-white p-6 rounded-lg shadow-lg w-full md:w-1/3">
                                        <h3 class="text-lg font-bold text-center mb-4">Konfirmasi Hapus</h3>
                                        <p class="text-center mb-6">Apakah Anda yakin ingin menghapus keterampilan ini?</p>
                                        
                                        <div class="flex justify-evenly">
                                            <!-- Tombol batal -->
                                            <button @click="modalDelete = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button>
                            
                                            <!-- Form untuk menghapus data -->
                                            <form action="{{ route('languages.destroy', $language->id) }}" method="POST" class="inline-block">
                                                @csrf
                                                @method('DELETE')
                            
                                                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded-lg hover:bg-red-700">Hapus</button>
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
@endsection
