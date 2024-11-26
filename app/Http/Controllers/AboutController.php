<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    // Tampilkan halaman utama About
    public function index()
    {
        $aboutData = About::all();
        return view('dashboard-admin.about', compact('aboutData'));
    }

    // Tampilkan halaman form untuk menambah data About
    public function create()
    {
        return view('dashboard-admin.about-create');
    }
    
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_lahir' => 'required|date|before:today',
            'alamat' => 'required|string|max:255',
            'negara' => 'required|string|max:255',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'email' => 'required|email|unique:about,email',
            'no_telp' => 'required|string|max:20',
        ]);
    
        // Simpan data ke database
        About::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'negara' => $request->negara,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
        ]);
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('about.index')->with('success', 'Data About berhasil ditambahkan!');
    }
    

    // Tampilkan halaman form edit data About
    public function edit(About $about)
    {
        return view('dashboard-admin.about-edit', compact('about'));
    }
    
    public function update(Request $request, About $about)
    {
        // Validasi input
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'tanggal_lahir' => 'required|date|before:today',
            'alamat' => 'required|string|max:255',
            'negara' => 'required|string|max:255',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'email' => 'required|email|unique:about,email,' . $about->id,
            'no_telp' => 'required|string|max:20',
        ]);
    
        // Update data di database
        $about->update([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'negara' => $request->negara,
            'provinsi' => $request->provinsi,
            'kota' => $request->kota,
            'email' => $request->email,
            'no_telp' => $request->no_telp,
        ]);
    
        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('about.index')->with('success', 'Data About berhasil diperbarui!');
    }
    

    // Hapus data
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('about.index')->with('success', 'Data About berhasil dihapus!');
    }
}
