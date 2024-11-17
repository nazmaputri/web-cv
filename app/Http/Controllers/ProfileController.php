<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function index()
    {
        $profile = Profile::all();
        return view('dashboard-admin.profile', compact('profile'));
    }

    public function create()
    {
        return view('dashboard-admin.profile-create');
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'nama' => 'required|string|max:255',
            'whatsapp' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    
        // Upload Foto Profil
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            // Menyimpan foto ke storage dan mengambil path-nya
            $fotoPath = $request->file('foto')->store('profiles', 'public');
        }
    
        // Simpan Profil Pengguna
        Profile::create([
            'foto' => $fotoPath, // Menyimpan path foto yang sudah diupload
            'nama' => $request->nama,
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
        ]);
    
        return redirect()->route('profile.index')->with('success', 'Data Profil berhasil ditambahkan!');
    }    


    public function edit($id)
    {
        $profile = Profile::findOrFail($id);
        return view('dashboard-admin.profile-edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama' => 'required|string|max:255',
            'whatsapp' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
    
        // Ambil data profil yang sudah ada
        $profile = Profile::findOrFail($id);
    
        // Proses update foto jika ada foto yang diupload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($profile->foto) {
                Storage::disk('public')->delete($profile->foto); 
            }
    
             // Simpan gambar baru dan dapatkan path-nya
             $profile->foto = $request->file('foto')->store('profiles', 'public');
        }
    
        // Update data profil lainnya
        $profile->nama = $request->nama;
        $profile->whatsapp = $request->whatsapp;
        $profile->facebook = $request->facebook;
        $profile->twitter = $request->twitter;
        $profile->instagram = $request->instagram;
        $profile->youtube = $request->youtube;
        $profile->linkedin = $request->linkedin;
    
        // Simpan perubahan pada profil
        $profile->save();
    
        return redirect()->route('profile.index')->with('success', 'Data Profil berhasil diperbarui!');
    }
    

    
    public function destroy($id)
    {
        $profile = Profile::findOrFail($id);
        if ($profile->foto) {
            Storage::disk('public')->delete($profile->foto);
        }
        $profile->delete();

        return redirect()->route('profile.index')->with('success', 'Data Profile berhasil dihapus!');
    }
    
    
}