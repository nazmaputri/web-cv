<?php

namespace App\Http\Controllers;

use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CertificateController extends Controller
{
    public function index()
    {
        $certificates = Certificate::all();
        return view('dashboard-admin.certificate', compact('certificates'));
    }

    public function create()
    {
        return view('dashboard-admin.certificate-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'nomor_sertifikat' => 'required|string|max:255|unique:certificates',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $certificate = new Certificate();
        $certificate->judul = $request->judul;
        $certificate->nomor_sertifikat = $request->nomor_sertifikat;

        if ($request->hasFile('foto')) {
            $path = $request->file('foto')->store('certificates', 'public');
            $certificate->foto = $path;
        }

        $certificate->save();

        return redirect()->route('certificates.index')->with('success', 'Sertifikat berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $certificate = Certificate::findOrFail($id);
        return view('dashboard-admin.certificate-edit', compact('certificate'));
    }

    public function update(Request $request, $id)
    {
        $certificate = Certificate::findOrFail($id);
    
        // Validasi input
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'nomor_sertifikat' => 'required|string|max:255',
            'foto' => 'nullable|array', // Memastikan foto bisa kosong atau array
            'foto.*' => 'image|mimes:jpg,jpeg,png,gif|max:2048', // Validasi setiap file yang di-upload
        ]);
    
        // Proses gambar yang di-upload
        $fotoPaths = [];
    
        if ($request->hasFile('foto')) {
            foreach ($request->file('foto') as $file) {
                // Simpan file dan dapatkan path-nya
                $fotoPaths[] = $file->store('certificates', 'public');
            }
        }
    
        // Simpan data sertifikat
        $certificate->judul = $validated['judul'];
        $certificate->nomor_sertifikat = $validated['nomor_sertifikat'];
    
        // Simpan path gambar ke dalam database sebagai JSON
        if (!empty($fotoPaths)) {
            $certificate->foto = json_encode($fotoPaths);
        }
    
        $certificate->save();
    
        return redirect()->route('certificates.index')->with('success', 'Sertifikat berhasil diperbarui');
    }
    

    public function destroy($id)
    {
        $certificate = Certificate::findOrFail($id);
        if ($certificate->foto) {
            Storage::disk('public')->delete($certificate->foto);
        }
        $certificate->delete();

        return redirect()->route('certificates.index')->with('success', 'Certificate deleted successfully');
    }
}
