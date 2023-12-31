<?php

namespace App\Http\Controllers;

use App\DataTables\SkillDataTable;
use App\Models\Skill;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\View\View;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SkillDataTable $dataTable) : View | JsonResponse
    {
        return $dataTable->render('admin.skill-section.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() : View
    {
        return view('admin.skill-section.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'percent' => ['required', 'integer']
        ]);

        $skill = new Skill();
        $skill->name = $request->name;
        $skill->percent = $request->percent;
        $skill->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.skill-section.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $skill = Skill::findOrFail($id);
        return view('admin.skill-section.edit', compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:255'],
            'percent' => ['required', 'integer']
        ]);

        $skill = Skill::findOrFail($id);
        $skill->name = $request->name;
        $skill->percent = $request->percent;
        $skill->save();

        toastr()->success('Created Successfully!');

        return to_route('admin.skill-section.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Skill::findOrFail($id)->delete();

        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
