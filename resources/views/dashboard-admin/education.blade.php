@extends('layouts.dashboard-admin')

@section('content')
<div class="max-w-5xl mx-auto my-5 bg-white p-6 rounded-md shadow-md">
    <h2 class="text-2xl font-bold mb-2 border-b-2 pb-2">Daftar Pendidikan</h2>

    <div class="mt-8">
        <a href="{{ route('education.create') }}" class="bg-cyan-400 hover:bg-cyan-600 hover:shadow-none shadow-md text-white px-4 py-2 text-sm rounded">Tambah Pendidikan</a>
    </div>

     <!-- Success Message -->
     @if (session('success'))
     <div class="text-green-500 mb-4 mt-6">
         {{ session('success') }}
     </div>
   @endif
    

<div class="overflow-x-auto mt-6">
    <table class="table-auto w-full text-sm">
        <thead>
            <tr class="bg-cyan-200 border-b">
                <th class="px-4 py-2 border-x">Universitas</th>
                <th class="px-4 py-2 border-x text-center">Tahun Mulai</th>
                <th class="px-4 py-2 border-x text-center">Tahun Akhir</th>
                <th class="px-4 py-2 border-x">Deskripsi</th>
                <th class="px-4 py-2 border-x text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $education)
            <tr class="hover:bg-gray-100 border-b">
                <td class="px-4 py-2 border-x">{{ $education->universitas }}</td>
                <td class="px-4 py-2 border-x text-center">{{ $education->tahun_mulai }}</td>
                <td class="px-4 py-2 border-x text-center">{{ $education->tahun_akhir }}</td>
                <td class="px-4 py-2 border-x">{{ $education->deskripsi }}</td>
                <td class="px-4 py-2 border-x text-center text-xs flex space-x-4 items-center justify-center">
                    <a href="{{ route('education.edit', $education->id) }}" class="bg-blue-400 p-2 rounded-md hover:shadow-none shadow-lg text-white flex hover:bg-blue-600">
                        <span>Edit</span>
                    </a>
                    <div x-data="{ popupDelete: false }">
                        <!-- Tombol untuk membuka popup -->
                        <button @click="popupDelete = true" class="bg-red-400 p-2 rounded-md hover:shadow-none shadow-lg text-white flex items-center hover:bg-red-600">
                            <span>Hapus</span>
                        </button>
                    
                        <!-- Popup Konfirmasi -->
                        <div x-show="popupDelete" x-transition @click.away="popupDelete = false" class="fixed inset-0 bg-gray-500 bg-opacity-50 flex justify-center items-center px-4 z-50">
                            <div class="bg-white p-6 rounded-lg shadow-lg w-1/3">
                                <h3 class="text-lg font-bold text-center mb-4">Konfirmasi Hapus</h3>
                                <p class="text-center mb-6">Apakah Anda yakin ingin menghapus data Pendidikan ini?</p>
                                
                                <div class="flex justify-evenly">
                                    <!-- Tombol batal -->
                                    <button @click="popupDelete = false" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Batal</button>
                    
                                    <!-- Form delete yang akan dikirim setelah konfirmasi -->
                                    <form action="{{ route('education.destroy', $education->id) }}" method="POST" class="inline-block">
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
