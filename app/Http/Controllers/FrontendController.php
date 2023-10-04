<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\HeroSection;
use Inertia\Response;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function index()
    {
        $hero = HeroSection::first();
        $about = About::first();
        return Inertia::render('Home', compact('hero', 'about'));
    }
}
