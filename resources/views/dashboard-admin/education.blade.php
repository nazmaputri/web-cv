@extends('layouts.dashboard-admin')

@section('title', 'Daftar Pendidikan')

@section('content')
<div class="container mx-auto mt-5">
    <h2 class="text-2xl font-bold mb-4">Daftar Pendidikan</h2>
    <a href="{{ route('education.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Pendidikan</a>
    
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2 border">Universitas</th>
                <th class="px-4 py-2 border">Tahun Mulai</th>
                <th class="px-4 py-2 border">Tahun Akhir</th>
                <th class="px-4 py-2 border">Deskripsi</th>
                <th class="px-4 py-2 border">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($educations as $education)
            <tr>
                <td class="px-4 py-2 border">{{ $education->universitas }}</td>
                <td class="px-4 py-2 border">{{ $education->tahun_mulai }}</td>
                <td class="px-4 py-2 border">{{ $education->tahun_akhir }}</td>
                <td class="px-4 py-2 border">{{ $education->deskripsi }}</td>
                <td class="px-4 py-2 border">
                    <a href="{{ route('education.edit', $education->id) }}" class="text-blue-500">Edit</a> |
                    <form action="{{ route('education.destroy', $education->id) }}" method="POST" class="inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-500">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
