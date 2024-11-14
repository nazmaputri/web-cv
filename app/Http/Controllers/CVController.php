<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\About;
use App\Models\Experience;
use App\Models\Education;
use App\Models\Skill;
use App\Models\Certificate;
use App\Models\Language;
use PDF;

class CVController extends Controller
{
    public function downloadCV()
    {
        $profile = Profile::first(); 
        $about = About::first();
        $experiences = Experience::all();
        $educations = Education::all();
        $skills = Skill::all();
        $certificates = Certificate::all();
        $languages = Language::all();
        $presentExperiences = $experiences->filter(function ($experience) {
            return $experience->tahun_akhir === 'Present';
        }); 

        // Render view ke PDF
        $pdf = PDF::loadView('cv-template', compact('profile', 'about', 'experiences', 'educations', 'skills', 'certificates', 'languages', 'presentExperiences'));
        
        // Mengunduh file PDF
        return $pdf->download('cv.pdf');
    }
}
