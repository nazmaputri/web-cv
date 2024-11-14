<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\About;
use App\Models\Profile;
use App\Models\Language;
use App\Models\Skill;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Certificate;

class LandingPageController extends Controller
{
    public function about()
    {
    
        $profile = Profile::all();
        $about = About::first();

        $address = $about->alamat;
        $city = Str::before(Str::afterLast($address, "Cibungbulang"), "Indonesia");

        return view('landing-page.about', compact('profile', 'about', 'city'));
    }
    

    public function resume()
    {
        $skill = Skill::all();
        $profile = Profile::all();
        $experience = Experience::all();
        $education = Education::all();
        $languages = Language::all();

        return view('landing-page.resume', compact('profile', 'experience', 'education', 'skill', 'languages'));
    }

    public function certificate()
    {
        $profile = Profile::all();
        $certificate = Certificate::all();

        return view('landing-page.certificate', compact('profile', 'certificate'));
    }

    public function contact()
    {
        $about = About::all();
        $profile = Profile::all();

        return view('landing-page.contact', compact('profile', 'about'));
    }

}
