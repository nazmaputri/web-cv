@extends('layouts.dashboard-admin')

@section('title', 'Daftar Experience')

@section('content')
<div class="container mx-auto mt-5">
    <h2 class="text-2xl font-bold mb-4">Daftar Experience</h2>
    <a href="{{ route('experience.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Experience</a>
    
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
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
                <td class="px-4 py-2 border">
                    <a href="{{ route('experience.edit', $experience->id) }}" class="text-blue-500">Edit</a> |
                    <form action="{{ route('experience.destroy', $experience->id) }}" method="POST" class="inline-block">
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
