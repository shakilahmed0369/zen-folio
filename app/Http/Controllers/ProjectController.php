<?php

namespace App\Http\Controllers;

use App\DataTables\ProjectDataTable;
use App\Http\Requests\ProjectStoreRequest;
use App\Http\Requests\ProjectStorRequest;
use App\Models\Project;
use App\Traits\FileUploadTrait;
use GuzzleHttp\Handler\Proxy;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Testing\LoggedExceptionCollection;
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
        $project->name = $request->name;
        $project->short_description = $request->short_description;
        $project->tags = $request->tags;
        $project->git_link = $request->git_link;
        $project->live_link = $request->live_link;
        $project->save();

        toastr()->success('Created Successfully');

        return to_route('admin.projects.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $imagePath = $this->fileUpload($request, 'thumbnail', $request->old_thumbnail);

        $project = Project::findOrFail($id);
        $project->thumbnail = !empty($imagePath) ? $imagePath : $request->old_thumbnail;
        $project->name = $request->name;
        $project->short_description = $request->short_description;
        $project->tags = $request->tags;
        $project->git_link = $request->git_link;
        $project->live_link = $request->live_link;
        $project->save();

        toastr()->success('Update Successfully');

        return to_route('admin.projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $project = Project::findOrFail($id);
            $this->deleteFile($project->thumbnail);
            $project->delete();

            return response(['status' => 'success', 'message' => 'Deleted Successfully']);
        }catch(\Exception $e) {
            logger($e);

            throw $e;
        }
    }
}
