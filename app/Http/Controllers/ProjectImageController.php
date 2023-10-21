<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectImage;
use App\Traits\FileUploadTrait;
use Illuminate\Console\View\Components\Task;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProjectImageController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request) : View
    {
        $images = ProjectImage::where('project_id', $request->id)->get();
        return view('admin.project.project-image.index', compact('images'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'images' => ['required'],
            'images.*' => ['image'],
            'project_id' => ['required']
        ]);

        $imagePaths = $this->MultiFileUpload($request, 'images');

        foreach($imagePaths as $path) {
            $image = new ProjectImage();
            $image->project_id = $request->project_id;
            $image->image = $path;
            $image->save();
        }

        toastr()->success('Updated Succesfully!');

        return redirect()->back();
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
        try {
            $image = ProjectImage::findOrFail($id);
            $this->deleteFile($image->image);
            $image->delete();

            return response(['status' => 'success', 'message' => 'Deleted Successfully']);
        }catch(\Exception $e) {
            logger($e);

            throw $e;
        }
    }
}
