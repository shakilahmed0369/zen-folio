<?php

namespace App\Http\Controllers;

use App\Http\Requests\AboutSectionUpdateRequest;
use App\Models\About;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $about = About::first();
        return view('admin.about-section.index', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AboutSectionUpdateRequest $request, string $id)
    {
        $imagePath = $this->fileUpload($request, 'image', $request->old_image);

        About::updateOrCreate(
            ['id' => $id],
            [
                'image' => !empty($imagePath) ? $imagePath : $request->old_image,
                'about' => strip_tags($request->about)
            ]
        );

        toastr('About section updated successfully', 'success');

        return redirect()->route('admin.about-section.index');
    }
}
