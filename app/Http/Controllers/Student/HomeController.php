<?php

namespace App\Http\Controllers\Student;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;
use DB; 

use App\Department;
use App\Course;
use App\Hall;
use App\Registeruser;

class HomeController extends Controller
{
    public function index()
    {	

        $flag = 0;
    	$departments = Department::all();
        return view("student.offeredcourselist", compact('departments','flag'));
    }

    public function readdata(Request $request)
    {	
        $this->validate($request,[
            'year' => 'required',
            'term' => 'required',
            'department_id' => 'required',
        ]);

        $flag = 1;
        $departments = Department::all();
        $courses = Course::latest()
        ->where('year',$request->year)
        ->orWhere('year',$request->term)
        ->where('department_id',$request->department_id)
        ->get();
        return view("student.offeredcourselist", compact('departments','flag','courses'));
    }


    public function startregistration()
    {	
        $register = DB::table('registerusers')->where('user_id', Auth::user()->id)->first();
        if($register!=null){
            Session::flash('success', 'You have already completed registration.');
            return redirect()->back();   
        }else{
            $departments = Department::all();
        $halls = Hall::all();
        return view("student.startregister", compact('departments','halls'));
        }
        
    }

    
    public function confirmregistration(Request $request)
    {	
        $this->validate($request,[
            'year'          => 'required|not_in:0',
            'term'          => 'required',
            'session'       => 'required',
            'department_id' => 'required',
            'halls_id'      => 'required',
        ]);

       $registration = new Registeruser();

       $registration->user_id       = Auth::User()->id;
       $registration->year          = $request->year;
       $registration->term          = $request->term;
       $registration->session       = $request->session;
       $registration->department_id = $request->department_id;
       $registration->halls_id       = $request->halls_id;
       $registration->save();


       Session::flash('success', 'You have successfully completed registration.');
       return redirect('student/home');
    }


    public function updateregistration()
    {	
        $updateregi = DB::table('registerusers')->where('user_id', Auth::user()->id)->first();
        
        $deptname = DB::table('departments')->where('id', $updateregi->department_id)->first();
        $hallname = DB::table('halls')->where('id', $updateregi->halls_id)->first();

        $departments = Department::all();
        $halls = Hall::all();
        return view("student.updateregistration", compact('departments','halls','updateregi','deptname','hallname'));
    }


    public function confirmupdateregistration(Request $request, $id)
    {
       return $request;
    }








}
