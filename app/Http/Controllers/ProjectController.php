<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectDataTable;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectStorRequest;
use App\Models\Project;
use App\Traits\FileUploadTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(ProjectDataTable $dataTable) : View | JsonResponse
    {
        return $dataTable->render('admin.project.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProjectStoreRequest $request)
    {
        $imagePath = $this->fileUpload($request, 'thumbnail');

        $project = new Project();
        $project->thumbnail = $imagePath;
        $project->short_description = $request->short_description;
        $project->tags = $request->tags;
        $project->git_link = $request->git_link;
        $project->live_link = $request->live_link;
        $project->save();

        toastr()->success('Created Successfully');

        return to_route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
