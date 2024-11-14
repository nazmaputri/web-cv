<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function index()
    {
        $resume = Resume::all();
        return view('dashboard-admin.resume', compact('resume'));
    }

    public function create()
    {
        return view('dashboard-admin.resume-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'pekerjaan' => 'required',
            'tahun_mulai_pekerjaan' => 'required|integer',
            'tempat_kerja' => 'required',
            'nama_universitas' => 'required',
            'tahun_mulai_pendidikan' => 'required|integer',
            'skill' => 'required',
            'bahasa' => 'required',
        ]);

        Resume::create($request->all());
        return redirect()->route('resume.index')->with('success', 'Resume berhasil ditambahkan.');
    }

    public function edit(Resume $resume)
    {
        return view('dashboard-admin.resume-edit', compact('resume'));
    }

    public function update(Request $request, $id)
{
    $resume = Resume::findOrFail($id);

    // Mengupdate data pekerjaan, universitas, skill, bahasa
    $resume->pekerjaan = implode(',', $request->pekerjaan);
    $resume->tahun_mulai_pekerjaan = implode(',', $request->tahun_mulai_pekerjaan);
    $resume->tahun_akhir_pekerjaan = implode(',', $request->tahun_akhir_pekerjaan);
    $resume->tempat_kerja = implode(',', $request->tempat_kerja);
    $resume->deskripsi_pekerjaan = implode(',', $request->deskripsi_pekerjaan);
    
    $resume->nama_universitas = implode(',', $request->nama_universitas);
    $resume->tahun_mulai_pendidikan = implode(',', $request->tahun_mulai_pendidikan);
    $resume->tahun_akhir_pendidikan = implode(',', $request->tahun_akhir_pendidikan);
    $resume->deskripsi_pendidikan = implode(',', $request->deskripsi_pendidikan);
    
    $resume->skill = implode(',', $request->skill);
    $resume->deskripsi_skill = implode(',', $request->deskripsi_skill);
    $resume->bahasa = implode(',', $request->bahasa);

    $resume->save();

    return redirect()->route('resume.index')->with('success', 'Resume updated successfully');
}


    public function destroy(Resume $resume)
    {
        $resume->delete();
        return redirect()->route('resume.index')->with('success', 'Resume berhasil dihapus.');
    }
}
