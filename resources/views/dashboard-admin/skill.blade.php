@extends('layouts.dashboard-admin')

@section('title', 'Daftar Keterampilan')

@section('content')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-6">Daftar Keterampilan</h1>

    <!-- Tabel daftar keterampilan -->
    <table class="min-w-full bg-white">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Keterampilan</th>
                <th class="py-2 px-4 border-b">Deskripsi</th>
                <th class="py-2 px-4 border-b">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($skills as $skill)
            <tr>
                <td class="py-2 px-4 border-b">{{ $skill->skill }}</td>
                <td class="py-2 px-4 border-b">{{ $skill->deskripsi }}</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{ route('skill.edit', $skill->id) }}" class="bg-blue-500 text-white px-3 py-1 rounded">Edit</a>
                    <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Tombol Tambah Keterampilan -->
    <a href="{{ route('skill.create') }}" class="bg-green-500 text-white px-4 py-2 mt-4 inline-block rounded">Tambah Keterampilan</a>
</div>

<div class="container">
    <h1 class="text-2xl font-bold mb-4">Daftar Bahasa</h1>
    
    <a href="{{ route('languages.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Tambah Bahasa</a>
    
    <table class="table-auto w-full mt-4">
        <thead>
            <tr>
                <th class="px-4 py-2">Bahasa</th>
                <th class="px-4 py-2">Persentase</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($languages as $language)
                <tr>
                    <td class="border px-4 py-2">{{ $language->bahasa }}</td>
                    <td class="border px-4 py-2">{{ $language->persentase_bar }}%</td>
                    <td class="border px-4 py-2">
                        <a href="{{ route('languages.edit', $language->id) }}" class="text-blue-600">Edit</a> |
                        <form action="{{ route('languages.destroy', $language->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
