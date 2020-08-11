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

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::all();
        $halls = Hall::all();
        return view("student.startregister", compact('departments','halls'));
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
        //
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
        $this->validate($request,[
            'year'          => 'required|not_in:0',
            'term'          => 'required',
            'session'       => 'required',
            'department_id' => 'required',
            'halls_id'      => 'required',
        ]);

        $registration = Registeruser::find($id);
        $registration->user_id       = Auth::User()->id;
       $registration->year          = $request->year;
       $registration->term          = $request->term;
       $registration->session       = $request->session;
       $registration->department_id = $request->department_id;
       $registration->halls_id       = $request->halls_id;
       $registration->save();


       Session::flash('success', 'You have successfully updated registration information');
      // return view('student.index');
      return redirect('student/home');

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
