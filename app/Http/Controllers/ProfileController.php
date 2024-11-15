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
        $request->validate([
            'name' => 'required|string|max:255',
            'whatsapp' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        // Upload Foto Profil
        $fotoPath = null;
        if ($request->hasFile('profile_picture')) {
            $fotoPath = $request->file('profile_picture')->store('images/profiles', 'public');
        }

        // Simpan Profil Pengguna
        Profile::create([
            'foto' => $fotoPath,
            'nama' => $request->name,
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
        ]);

        return redirect()->route('profile.index')->with('success', 'Profil berhasil disimpan!');
    }


    public function edit(Profile $profile)
    {
        return view('dashboard-admin.profile-edit', compact('profile'));
    }

    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'whatsapp' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048', // Validasi foto
        ]);
    
        // Ambil data profil yang sudah ada
        $profile = Profile::findOrFail($id);
    
        // Jika ada foto baru yang di-upload
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($profile->foto && Storage::exists('public/images/profiles/' . $profile->foto)) {
                Storage::delete('public/images/profiles/' . $profile->foto);
            }
    
            // Upload foto baru
            $fotoPath = $request->file('foto')->store('images/profiles', 'public');
            $profile->foto = basename($fotoPath); // Menyimpan nama file foto baru
        }
    
        // Update data profil lainnya (tanpa mengupdate foto jika tidak ada perubahan)
        $profile->update([
            'name' => $request->name,
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
        ]);
    
        // Redirect ke halaman profil dengan pesan sukses
        return redirect()->route('profile.index')->with('success', 'Profil berhasil diperbarui!');
    }
    
    

    
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profile.index')->with('success', 'Profil berhasil dihapus.');
    }
    
}
