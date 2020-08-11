<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;
use App\Selectcourse;
use Illuminate\Support\Facades\Auth;
use Session;
use DB;

class SelectcourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $check = DB::table('selectcourses')->where('user_id', Auth::user()->id)->first();
        if($check!=null){
           // Session::flash('success', 'You have already completed registration.');
            return redirect()->back();   
        }else{
            $courses = Course::all();
            return view("student.selectcourse", compact('courses'));
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $check = new Selectcourse();
        $check->user_id = Auth::user()->id;
        $check->course_id = collect($request->course_id)->implode(',');
        $check->student_name = Auth::user()->name;
        $check->department_id =  Auth::user()->department_id;
        $check->department_name = Auth::user()->department_name;
        $check->session = Auth::user()->session;
        $check->year = Auth::user()->year;
        $check->term = Auth::user()->term;
        
        //return $check;
       $check->save();
       // Session::flash('success', 'You have successfully upade your courses.');

    return view('student.index');;
        
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

        $courses = Course::all();
        $user_id = Auth::user()->id;
        $course_id = [];
        $finds = Selectcourse::where('user_id',$id)->first();
        //return $finds;

        $finds = explode(",",$finds->course_id);
      


       /* foreach($finds as $find){
            array_push($course_id,$find->course_id);
        }*/
       // $course_id = explode(",",$finds->course_id);
        return view('student.updateselectcourse',compact('courses','user_id','finds'));
        //$new_array = array();
      //  $new_array = explode(',',$finds->course_id);
        
        //return view('student.updateselectcourse',compact('courses','user_id','new_array '));
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
        $check = Selectcourse::where('user_id',$id)->first();
        $check->user_id = Auth::user()->id;
        $check->course_id = collect($request->course_id)->implode(',');
        
        //return $check;
       $check->save();
       // Session::flash('success', 'You have successfully upade your courses.');

    return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
