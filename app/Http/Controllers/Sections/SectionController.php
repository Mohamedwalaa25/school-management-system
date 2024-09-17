<?php

namespace App\Http\Controllers\Sections;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSectionRequest;
use App\Models\ClassRoom;
use App\Models\Grade;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Grades = Grade::with('Sections')->get();
        $list_Grades = Grade::all();
        return view('pages.Sections.index', compact('Grades', 'list_Grades'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSectionRequest $request)
    {

        $validated = $request->validated();
        try {

            $Sections = Section::create([
                'Name_Section'=> ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En],
                'Grade_id' => $request->Grade_id,
                'Class_id' => $request->Class_id,
                'Status' => 1,
            ]);

            toastr()->success(trans('messages.success'));
            return redirect()->route('Sections.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreSectionRequest $request, $id)
    {

        $section = Section::findOrFail($id);

        $validated = $request->validated();

        try {

            $section->update([
                'Name_Section'=> ['ar' => $request->Name_Section_Ar, 'en' => $request->Name_Section_En],
                'Grade_id' => $request->Grade_id,
                'Class_id' => $request->Class_id,
            ]);
            if (isset($request->Status)) {
                $section->Status = 1;
            } else {
                $section->Status = 2;
            }

            $section->save();
            toastr()->success(trans('messages.success'));
            return redirect()->route('Sections.index');
        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $section = Section::findOrFail($id);
        $section->delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Sections.index');
    }

    public function getclasses($id)
    {

        $list_classes = ClassRoom::where('Grade_id', $id)->pluck('Name_Class', 'id');
        return $list_classes ;
    }
}
