<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SendSMSController;

use App\Models\User; 
use App\Models\Course;
use App\Models\Unit;

use Validator, Auth;
use Redirect;
use Input, DB;

class UnitController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $units = Unit::all();

        return view('backend.admin.unit.index', compact('units'));
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
        $courses = \DB::table('courses')->lists('name', 'id');
        $selectedCourse = \DB::table('course_units')->pluck('course_id');
        
        return view('backend.admin.unit.create', compact('view', 'courses', 'selectedCourse'));
    }

    public function checkin($slug)
    {
        //

        $view = '';
        $courses = \DB::table('courses')->lists('name', 'id');
        $selectedCourse = \DB::table('course_units')->pluck('course_id');
        $unitName = $slug;
        $unitID = Unit::where('slug', $unitName)->value('id');
        $className = Unit::where('slug', $unitName)->value('class');

        $firstName = User::where('course_id', $unitID)->value('first_name');
        $lastName = User::where('course_id', $unitID)->value('last_name');

        $lecturerName = $firstName." ".$lastName;

        return view('backend.admin.unit.checkin', compact('view', 'courses', 'selectedCourse', 'unitName', 'lecturerName', 'className'));
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

        // dd($input);

        $validator = Validator::make($input, Unit::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        } else {

            $unit                        = new Unit;  
            $unit->name                  = $input['name'];
            $unit->slug                  = str_slug($unit->name, "-");
            $unit->course_id             = $input['course'];
            $unit->class                 = $input['class'];
            $unit->status                = "CUSTOM";
            $unit->active                = 1;
            $unit->save();


            return redirect()->route('admin.unit.index')
            ->with('message', 'Successfully created unit!');
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
