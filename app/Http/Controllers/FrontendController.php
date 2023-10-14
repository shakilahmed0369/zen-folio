<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\HeroSection;
use App\Models\LoveToDo;
use App\Models\Skill;
use Inertia\Response;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function index()
    {
        $hero = HeroSection::first();
        $about = About::first();
        $skills = Skill::all();
        $loveToDos = LoveToDo::first();
        return Inertia::render('Home', compact('hero', 'about', 'skills', 'loveToDos'));
    }
}
