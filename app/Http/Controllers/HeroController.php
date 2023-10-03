<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateHeroRequest;
use App\Models\HeroSection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HeroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hero = HeroSection::first();
        return view('admin.hero-section.index', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeroRequest $request, string $id) : RedirectResponse
    {
        $formDatas = $request->validated();
        HeroSection::updateOrCreate(
            ['id' => $id],
            $formDatas
        );
        toastr()->success(__('Updated Successfully'));

        return redirect()->back();
    }
}
