<?php

namespace App\Http\Controllers\Grades;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGrades;
use App\Models\Grade;
use Illuminate\Http\Request;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $Grades = Grade::all();
        return view('pages.grades.index', compact('Grades'));
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
    public function store(StoreGrades $request)
    {

        if (Grade::where('Name->ar', $request->Name)->orWhere('Name->en', $request->Name_en)->exists()) {
            return redirect()->back()->withErrors(['error' => trans('Grades_trans.exists')]);
        }

        try {
            $request->validated();

            Grade::create([
                'Name' => [
                    'en' => $request->Name_en,
                    'ar' => $request->Name,
                ],
                'Notes' => $request->Notes,
            ]);

            toastr()->success(trans('messages.success'));
            return to_route('grades.index');
        } catch (\Exception $e) {

            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreGrades $request, Grade $grade)
    {

        try {
            $request->validated();
            $grade->update([
                'Name' => [
                    'en' => $request->Name_en,
                    'ar' => $request->Name,
                ],
                'Notes' => $request->Notes,
            ]);

            toastr()->success(trans('messages.success'));
            return to_route('grades.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Grade $grade)
    {
        try {
            $grade->delete();
            toastr()->success(trans('messages.success'));
            return redirect()->route('grades.index');
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
