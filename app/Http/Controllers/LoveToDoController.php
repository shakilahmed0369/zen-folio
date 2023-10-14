<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoveToDoUpdateRequest;
use App\Models\LoveToDo;
use App\Traits\FileUploadTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class LoveToDoController extends Controller
{
    use FileUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index() : View
    {
        $loveToDo = LoveToDo::first();
        return view('admin.love-to-do.index', compact('loveToDo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LoveToDoUpdateRequest $request, string $id)
    {
        // Handle images
        $image_one = $this->fileUpload($request, 'image_one', 'old_image_one');
        $image_two = $this->fileUpload($request, 'image_two', 'old_image_two');
        $image_three = $this->fileUpload($request, 'image_three', 'old_image_three');
        $image_four = $this->fileUpload($request, 'image_four', 'old_image_four');

        // save data
        LoveToDo::UpdateOrCreate(
            ['id' => $id],
            [
                'image_one' => !empty($image_one) ? $image_one : $request->old_image_one,
                'title_one' => $request->title_one,
                'image_two' => !empty($image_two) ? $image_two : $request->old_image_two,
                'title_two' => $request->title_two,
                'image_three' =>!empty($image_three) ? $image_three : $request->old_image_three,
                'title_three' => $request->title_three,
                'image_four' => !empty($image_four) ? $image_four : $request->old_image_four,
                'title_four' => $request->title_four,
            ]
        );

        toastr()->success('Updated Successfully');

        return redirect()->back();

    }

}
