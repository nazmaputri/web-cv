<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experience = Experience::all();
        return view('dashboard-admin.experience', compact('experience'));
    }

    public function create()
    {
        return view('dashboard-admin.experience-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pekerjaan'     => 'required|string|max:255',
            'tahun_mulai'   => 'required|integer',
            'tahun_akhir'   => 'nullable|string',
            'deskripsi'     => 'nullable|string',
        ]);
    
        // Ambil semua data dari request
        $data = $request->all();
    
        // Jika tahun_akhir null, ubah menjadi 'Present'
        if (is_null($data['tahun_akhir'])) {
            $data['tahun_akhir'] = 'Present';
        }
    
        // Menyimpan data ke database
        Experience::create($data);
    
        // Mengarahkan kembali dengan pesan sukses
        return redirect()->route('experience.index')->with('success', 'Pengalaman Kerja berhasil ditambahkan!');
    }
    

    public function edit($id)
    {
        $experience = Experience::findOrFail($id);
        return view('dashboard-admin.experience-edit', compact('experience'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'pekerjaan'     => 'required|string|max:255',
            'tahun_mulai'   => 'required|integer',
            'tahun_akhir'   => 'nullable|string',
            'deskripsi'     => 'nullable|string',
        ]);

        $experience = Experience::findOrFail($id);
        $experience->update($request->all());
        return redirect()->route('experience.index')->with('success', 'Pengalaman Kerja berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $experience = Experience::findOrFail($id);
        $experience->delete();
        return redirect()->route('experience.index')->with('success', 'Pengalaman Kerja berhasil dihapus!');
    }
}
