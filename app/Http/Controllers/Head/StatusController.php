<?php

namespace App\Http\Controllers\Head;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Selectcourse;
use App\User;
use DB;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $statuses = Selectcourse::all();
        return view('head.status.index',compact('statuses'));
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
        $status = Selectcourse::find($id);
        $status->head_status = 2;
        $status->save();
        return redirect()->route('head.status.index');
    }

    public function unconfirmed($id)
    {
        $status = Selectcourse::find($id);
        $status->head_status = 1;
        $status->save();
        return redirect()->route('head.status.index');
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
        $status = Selectcourse::find($id);
        $status->head_status = 1;
        $status->save();
        return redirect()->route('head.status.index');
    }
}
