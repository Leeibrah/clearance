<?php

namespace App\Http\Controllers\Admin;

// use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\SendSMSController;

use App\Models\User; 
use App\Models\Course;
use App\Models\Attendance;

use Validator, Auth;
use Redirect;
use Input, DB;
use Request;

use \Milon\Barcode\DNS1D;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendances = Attendance::all();

        return view('backend.admin.attendance.index', compact('attendances'));
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

        return view('backend.admin.attendance.create', compact('view'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        $input = Input::all();

        // dd($unit);
        // $studentNumber = "BIT-C006-0295/14";

        // $d = new DNS1D();
        // $d->setStorPath(__DIR__."/cache/");
        // echo $d->getBarcodeHTML("9780691147727", "EAN13");



        $validator = Validator::make($input, attendance::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator);
        } else {

            $attendance                        = new Attendance;  
            $attendance->student_number        = $input['code'];
            $studentId = User::where('student_number', $attendance->student_number)->value('id');
            $course_id = User::where('student_number', $attendance->student_number)->value('course_id');
            $course = Course::where('id', $course_id)->value('name');
            $attendance->course                = $course;
            $attendance->unit                  = $input['unit'];
            $attendance->lecturer              = $input['lecturer'];
            $attendance->student_id            = $studentId;
            $attendance->status                = "CUSTOM";
            $attendance->active                = 1;
            $attendance->save();


            return redirect()->route('admin.attendance.index')
            ->with('message', 'Successfully created attendance!');
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
        
        // dd($id);
        $attendances = Attendance::where('student_id', $id)->get();
        $user = User::where('id', $id)->first();

        return view('backend.admin.attendance.show', compact('attendances', 'user'));
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
