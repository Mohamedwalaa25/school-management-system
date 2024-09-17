<?php

namespace App\Http\Controllers\ClassRooms;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClassRommsRequest;
use App\Models\ClassRoom;
use App\Models\Grade;
use Illuminate\Http\Request;


class ClassRoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $List_Classes = ClassRoom::all();
        $Grades = Grade::all();

        return view('pages.ClassRooms.index', compact('List_Classes', 'Grades'));
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
    public function store(ClassRommsRequest $request)
    {
        try {
            $listClasses = $request->List_Classes;
            foreach ($listClasses as $class) {

                ClassRoom::create([
                    'Name_Class' => ['en' => $class['Name_class_en'], 'ar' => $class['Name']],
                    'grade_id' => $class['Grade_id'],
                ]);
            }

            toastr()->success(trans('messages.success'));
            return redirect()->route('Classrooms.index');

        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(ClassRoom $classRoom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClassRoom $classRoom)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClassRommsRequest $request, $id)
    {
        $update =ClassRoom::query()->findOrFail($id);
        try {
            $update->update([
                'Name_Class' => ['en' => $request->Name_en, 'ar' => $request->Name],
                'grade_id' => $request->Grade_id,
            ]);
            toastr()->success(trans('messages.success'));
            return redirect()->route('Classrooms.index');
        } catch (\Exception $e) {
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        $classRoom = ClassRoom::query()->findOrFail($id);
        $classRoom->delete();
        toastr()->success(trans('messages.success'));
        return redirect()->route('Classrooms.index');
    }

    public function delete_all(Request $request)
    {
        $delete_all_id = explode(",", $request->delete_all_id);

        Classroom::whereIn('id', $delete_all_id)->Delete();
        toastr()->error(trans('messages.Delete'));
        return redirect()->route('Classrooms.index');
    }


    public function Filter_Classes(Request $request)
    {
        $Grades = Grade::all();
        $Search = Classroom::select('*')->where('Grade_id','=',$request->Grade_id)->get();
        return view('pages.ClassRooms.index',compact('Grades'))->withDetails($Search);

    }
}
