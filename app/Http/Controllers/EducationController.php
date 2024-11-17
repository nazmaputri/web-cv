<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
        $educations = Education::all();
        return view('dashboard-admin.education', compact('educations'));
    }

    public function create()
    {
        return view('dashboard-admin.education-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'universitas' => 'required|string|max:255',
            'tahun_mulai' => 'required|integer',
            'tahun_akhir' => 'nullable|integer|gte:tahun_mulai',
            'deskripsi' => 'nullable|string',
        ]);

         // Jika tahun_akhir null, ubah menjadi 'Present'
        $data = $request->all();
        if (is_null($data['tahun_akhir'])) {
            $data['tahun_akhir'] = 'Present';
        }

        Education::create($request->all());

        return redirect()->route('education.index')->with('success', 'Data pendidikan berhasil ditambahkan!');
    }

    public function edit(Education $education)
    {
        return view('dashboard-admin.education-edit', compact('education'));
    }

    public function update(Request $request, Education $education)
    {
        $request->validate([
            'universitas' => 'required|string|max:255',
            'tahun_mulai' => 'required|integer',
            'tahun_akhir' => 'nullable|integer|gte:tahun_mulai',
            'deskripsi' => 'nullable|string',
        ]);

        $education->update($request->all());

        return redirect()->route('education.index')->with('success', 'Data pendidikan berhasil diperbarui!');
    }

    public function destroy(Education $education)
    {
        $education->delete();

        return redirect()->route('education.index')->with('success', 'Data pendidikan berhasil dihapus!');
    }
}
