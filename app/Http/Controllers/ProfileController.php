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
            'job' => 'required|string|max:255',
            'whatsapp' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'cv' => 'nullable|file|mimes:pdf|max:2048',
        ]);

        // Upload Foto Profil
        $fotoPath = null;
        if ($request->hasFile('profile_picture')) {
            $fotoPath = $request->file('profile_picture')->store('images/profiles', 'public');
        }

        // Pastikan folder 'public/cvs' ada, jika tidak buat
        $cvFolder = 'public/cvs';
        if (!Storage::exists($cvFolder)) {
            Storage::makeDirectory($cvFolder);
        }

        // Menyimpan CV jika ada
        $cvPath = null;
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
        }

        // Simpan Profil Pengguna
        Profile::create([
            'foto' => $fotoPath,
            'cv_path' => $cvPath, 
            'nama' => $request->name,
            'pekerjaan' => $request->job,
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
        $request->validate([
            'name' => 'required|string|max:255',
            'job' => 'required|string|max:255',
            'whatsapp' => 'nullable|url',
            'facebook' => 'nullable|url',
            'twitter' => 'nullable|url',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'profile_picture' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
            'cv' => 'nullable|file|mimes:pdf|max:2048',
        ]);
    
        // Ambil data profil yang sudah ada
        $profile = Profile::findOrFail($id); // Mencari profil berdasarkan ID
    
        // Upload Foto Profil jika ada
        if ($request->hasFile('profile_picture')) {
            // Hapus foto lama jika ada
            if ($profile->foto && Storage::exists('public/images/profiles/' . $profile->foto)) {
                Storage::delete('public/images/profiles/' . $profile->foto);
            }
    
            // Upload foto baru
            $fotoPath = $request->file('profile_picture')->store('images/profiles', 'public');
            $profile->foto = basename($fotoPath);
        }
    
        // Pastikan folder 'public/cvs' ada, jika tidak buat
        $cvFolder = 'public/cvs';
        if (!Storage::exists($cvFolder)) {
            Storage::makeDirectory($cvFolder);
        }
    
        // Update CV jika ada
        if ($request->hasFile('cv')) {
            // Hapus CV lama jika ada
            if ($profile->cv_path && Storage::exists('public/cvs/' . $profile->cv_path)) {
                Storage::delete('public/cvs/' . $profile->cv_path);
            }
    
            // Upload CV baru
            $cvPath = $request->file('cv')->store('cvs', 'public');
            $profile->cv_path = basename($cvPath); // Menyimpan nama file CV pada cv_path
        }
    
        // Update data profil lainnya
        $profile->update([
            'nama' => $request->name,
            'pekerjaan' => $request->job,
            'whatsapp' => $request->whatsapp,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'linkedin' => $request->linkedin,
        ]);
    
        return redirect()->route('profile.show', $profile->id)->with('success', 'Profil berhasil diperbarui!');
    }
    
    
    
    public function destroy(Profile $profile)
    {
        $profile->delete();
        return redirect()->route('profile.index')->with('success', 'Profil berhasil dihapus.');
    }
    
}
