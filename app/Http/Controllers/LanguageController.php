<?php

namespace App\Http\Controllers;

use App\Models\Language;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        return view('dashboard-admin.bahasa', compact('languages'));
    }

    public function create()
    {
        return view('dashboard-admin.bahasa-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'bahasa' => 'required|string|max:255',
            'persentase_bar' => 'nullable|integer|between:0,100',
        ]);

        Language::create($request->all());

        return redirect()->route('skill.index')->with('success', 'Keterampilan Bahasa berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $language = Language::findOrFail($id);
        return view('dashboard-admin.bahasa-edit', compact('language'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'bahasa' => 'required|string|max:255',
            'persentase_bar' => 'nullable|integer|between:0,100',
        ]);

        $language = Language::findOrFail($id);
        $language->update($request->all());

        return redirect()->route('skill.index')->with('success', 'Keterampilan Bahasa berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $language = Language::findOrFail($id);
        $language->delete();

        return redirect()->route('skill.index')->with('success', 'Keterampilan Bahasa berhasil dihapus!');
    }
}
