@extends('layouts.dashboard-admin')

@section('content')
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
