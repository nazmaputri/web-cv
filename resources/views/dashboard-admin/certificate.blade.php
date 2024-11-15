@extends('layouts.dashboard-admin')

@section('content')
    <div class="bg-white p-8">
    <h1 class="text-3xl font-bold border-b-2  border-gray-300 pb-2 mb-8">Daftar Sertifikat</h1>
    <div class="flex justify-start">
        <a href="{{ route('certificates.create') }}" class="bg-cyan-400 text-white px-4 py-2 rounded">Tambah Sertifikat</a>
    </div>    

    @if(session('success'))
        <div class="mt-4 text-green-400">{{ session('success') }}</div>
    @endif

    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-6">
        @foreach($certificates as $certificate)
            <div class=" bg-white p-4 shadow-md rounded mb-4 ">
                <h2 class="font-semibold">{{ $certificate->judul }}</h2>
                <p>Nomor Sertifikat : {{ $certificate->nomor_sertifikat }}</p>
                @if($certificate->foto)
                    <img src="{{ asset('storage/' . $certificate->foto) }}" alt="Certificate Image" class=" mt-2">
                @endif
                <div class="mt-4 flex justify-end space-x-2">
                    <a href="{{ route('certificates.edit', $certificate->id) }}" class="bg-blue-400 text-white px-4 py-2 rounded">Edit</a>
                    <form action="{{ route('certificates.destroy', $certificate->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-400 text-white px-4 py-2 rounded">Hapus</button>
                    </form>
                </div>                
            </div>
        @endforeach
    </div>
    </div>
@endsection
