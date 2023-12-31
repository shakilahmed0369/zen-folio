<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use App\Models\HeroSection;
use App\Models\LoveToDo;
use App\Models\Project;
use App\Models\ProjectImage;
use App\Models\Skill;
use App\Models\Social;
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
        $projects = Project::where('status', 1)->get();
        $contact = Contact::first();
        $social = Social::first();
        return Inertia::render('Home', compact('hero', 'about', 'skills', 'loveToDos', 'projects', 'contact', 'social'));
    }

    function showProject(string $id) {
        $project = Project::findOrFail($id);
        $projectImages = ProjectImage::where('project_id', $project->id)->get();
        return Inertia::render('Project', compact('project', 'projectImages'));
    }
}
