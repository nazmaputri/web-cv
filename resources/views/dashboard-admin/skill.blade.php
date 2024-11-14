@extends('layouts.dashboard-admin')

@section('content')
<div class="shadow-md mx-auto bg-white p-6 rounded text-sm">
    <h1 class="text-2xl font-bold mb-6 border-b-2 pb-2">Daftar Keterampilan</h1>
    
    <!-- Tombol Tambah Keterampilan -->
    <a href="{{ route('skill.create') }}" class="bg-cyan-400 hover:bg-cyan-600 text-white text-sm px-4 py-2 mb-4 inline-block rounded">Tambah Keterampilan</a>

    <!-- Success Message -->
    @if (session('success'))
    <div class="text-green-500 mb-4 mt-6">
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
                        <form action="{{ route('skill.destroy', $skill->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-400 hover:bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>

<div class="shadow-md mx-auto bg-white p-6 rounded text-sm my-8">
    <h1 class="text-2xl font-bold mb-6 border-b-2 pb-2">Daftar Bahasa</h1>
    
    <a href="{{ route('languages.create') }}" class="bg-cyan-400 hover:bg-cyan-600 text-white px-4 py-2  mb-4 rounded">Tambah Bahasa</a>
    
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
                        <td class="flex p-2 space-x-2 text-center items-center justify-center">
                            <a href="{{ route('languages.edit', $language->id) }}" class="bg-blue-400 hover:bg-blue-600 text-white px-3 py-1 rounded">Edit</a>
                            <form action="{{ route('languages.destroy', $language->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-400 hover:bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
