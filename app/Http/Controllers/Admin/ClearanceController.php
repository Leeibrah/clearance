<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SendSMSController;

use App\Models\User; 
use App\Models\Clearance;
use App\Models\Department;

use Validator, Auth;
use Redirect;
use Input, DB;

class ClearanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clearances = Clearance::all();

        return view('backend.admin.clearance.index', compact('clearances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $view = '';
        // $departments = Department::where('active', '=', 1)->orderBy('name', 'asc')->lists('name', 'id');
        $departmentList = \DB::table('departments')
                        ->orderBy('name', 'asc')->lists('name', 'id');

        return view('backend.admin.clearance.create', compact('view', 'departmentList'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = Input::all();


        $validator = Validator::make($input, Clearance::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        } else {

            if(User::where('registration_number', '=', $input['student_number'])->exists()) {
                // store

                $col                        = new clearance;  
                $col->item                  = $input['item'];
                $col->department_id         = $input['department'];
                $col->user_id               = User::where('registration_number', '=', $input['student_number'])->value('id');
                $col->status                = "UNCLEARED";
                $col->active                = 1;
                $col->save();


                return redirect()->route('admin.clearance.index')
                ->with('message', 'Successfully created cl!');
                
            }else{
                $message = "Sorry! No Student with that registration Number";
                return redirect()->back()
                    ->withErrors($message)
                    ->withInput();
            }
        }
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
        //
    }
}
