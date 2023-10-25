<?php

namespace App\Http\Controllers;

use App\Http\Requests\SocialUpdateRequest;
use App\Models\Social;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $social = Social::first();
        return view('admin.social.index', compact('social'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SocialUpdateRequest $request, string $id) : RedirectResponse
    {
        Social::updateOrCreate(
            ['id' => 1],
            [
                'facebook' => $request->facebook,
                'x' => $request->x,
                'github' => $request->github,
                'leecode' => $request->leecode,
                'stackoverflow' => $request->stackoverflow,
                'linkedin' => $request->linkedin
            ]
        );

        toastr()->success('Updated Successfully');
        return redirect()->back();
    }
}
