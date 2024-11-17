<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class SettingController extends Controller
{
    public function show()
    {
        // Ambil data user yang sedang login
        $user = Auth::user();
        
        return view('dashboard-admin.setting', compact('user'));
    }
    
    public function update(Request $request)
    {
        // Validasi data yang dimasukkan
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email,' . Auth::id(),
            'password' => 'nullable|confirmed|min:8',
        ]);
    
        // Ambil data user yang sedang login
        $user = Auth::user();
    
        // Update nama dan email
        $user->name = $request->name;
        $user->email = $request->email;
    
        // Jika password diisi, update password
        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }
    
        // Simpan perubahan
        $user->save();
    
        // Redirect dengan pesan sukses
        return redirect()->route('dashboard')->with('success', 'Pengaturan berhasil diperbarui!');
    }
    
}