<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Department;
class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::all();
        return view('admin.course.index',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $departments = Department::all();
        return view('admin.course.create',compact('departments'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            
            'code' => 'required',
            'name'=>'required',
            'department_id'=>'required',
            'year'=>'required',
            'term'=>'required',
            'credit'=>'required',
        ]);
       
        $course = new Course();
        
        $course->code = $request->code;
        $course->name = $request->name;
        $course->department_id = $request->department_id;
        $course->year = $request->year;
        $course->term = $request->term;
        $course->credit = $request->credit;
       
        $course->save();
        return redirect()->route('admin.course.index')->with('successMsg','Course added Successfully');
   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = Course::find($id);
       
        $course->delete();
        return redirect()->back()->with('successMsg','Course successfully Deleted');
    
    }
}
