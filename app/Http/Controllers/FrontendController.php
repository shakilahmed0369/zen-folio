<?php

namespace App\Http\Controllers;

use App\Models\HeroSection;
use Inertia\Response;
use Inertia\Inertia;

class FrontendController extends Controller
{
    function index()
    {
        $hero = HeroSection::first();
        return Inertia::render('Home', compact('hero'));
    }
}
