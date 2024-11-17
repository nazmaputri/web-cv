<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use App\Models\Language;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        $languages = Language::all();
        $skills = Skill::all();
        return view('dashboard-admin.skill', compact('skills', 'languages'));
    }

    public function create()
    {
        return view('dashboard-admin.skill-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'skill' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Skill::create($request->all());

        return redirect()->route('skill.index')->with('success', 'Keterampilan berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $skill = Skill::findOrFail($id);
        return view('dashboard-admin.skill-edit', compact('skill'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'skill' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $skill = Skill::findOrFail($id);
        $skill->update($request->all());

        return redirect()->route('skill.index')->with('success', 'Keterampilan berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $skill = Skill::findOrFail($id);
        $skill->delete();

        return redirect()->route('skill.index')->with('success', 'Keterampilan berhasil dihapus!');
    }
}
