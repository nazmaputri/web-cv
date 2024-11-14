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
                        <i class="fa-solid fa-pen-to-square"></i>
                        <span>Edit</span>
                    </a>
                    <form action="{{ route('education.destroy', $education->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-400 p-2 rounded-md hover:shadow-none shadow-lg text-white flex items-center hover:bg-red-600">
                            <i class="fa-regular fa-trash-can"></i>
                           <span>Hapus</span> 
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
@endsection
