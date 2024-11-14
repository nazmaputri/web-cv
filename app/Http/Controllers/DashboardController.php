<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Language;
use App\Models\Skill;
use App\Models\Experience;

class DashboardController extends Controller
{
    public function index() {
        $totalSkills = Skill::count();
        $totalExperience = Experience::count();
        $totalLanguages = Language::count(); 
 
        // Mengirim data ke view
        return view('dashboard-admin.dashboard-admin', compact('totalSkills', 'totalExperience', 'totalLanguages'));
    }
}
