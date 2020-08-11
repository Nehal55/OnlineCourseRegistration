<?php

namespace App\Http\Controllers\Accountant;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Session;

use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $profile = User::find(Auth::User()->id);
        return view('accountant.edit',compact('profile'));
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
            'name' => 'required|string|max:255',
            
            'email' => [
                'required',
                Rule::unique('users')->ignore($id),
            ],
            'contact_no' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);


        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->email =  $request->email;
        $profile->contact_no =  $request->contact_no;
        $profile->password =  $request->password;
        $profile->password = Hash::make($request->password);
        
        $profile->save();
        Session::flash('success', 'You have successfully updated your information.');
        return redirect()->route('accountant.profile.index');
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
