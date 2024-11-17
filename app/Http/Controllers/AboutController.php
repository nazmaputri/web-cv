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

    // Simpan data baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'negara' => 'required|string|max:255',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'email' => 'required|email|unique:about,email',
            'no_telp' => 'required|string|max:20',
        ]);

        About::create($request->all());

        return redirect()->route('about.index')->with('success', 'Data About berhasil ditambahkan!');
    }

    // Tampilkan halaman form edit data About
    public function edit(About $about)
    {
        return view('dashboard-admin.about-edit', compact('about'));
    }

    // Update data yang telah diedit
    public function update(Request $request, About $about)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'umur' => 'required|integer',
            'alamat' => 'required|string|max:255',
            'negara' => 'required|string|max:255',
            'provinsi' => 'required|string',
            'kota' => 'required|string',
            'email' => 'required|email|unique:about,email,' . $about->id,
            'no_telp' => 'required|string|max:20',
        ]);

        $about->update($request->all());

        return redirect()->route('about.index')->with('success', 'Data About berhasil diperbarui!');
    }

    // Hapus data
    public function destroy(About $about)
    {
        $about->delete();

        return redirect()->route('about.index')->with('success', 'Data About berhasil dihapus!');
    }
}
