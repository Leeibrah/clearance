<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User as User;
use App\Models\Course as Course;
use App\Models\Unit as Unit;
use App\Models\Attendance as Attendance;

use App\Models\Loan as Loan;
use App\Models\LoanLimit as LoanLimit;

use Auth;

class AdminController extends Controller
{
    //

    public function dashboard()
    {   

        $users = User::all();

        $studentCount = User::whereHas('roles', function($q){
            $q->where('name', 'student');
        })->count();

        $courseCount = Course::all()->count();
        $unitCount = Unit::all()->count();
        $attendanceCount = Attendance::all()->count();

        return view('backend.admin.dashboard', compact('users', 'studentCount', 'courseCount', 'attendanceCount', 'unitCount'));
    }

    public function finances()
    {   
        return view('backend.admin.finances');
    }

    // public function index()
    // {   
    //     return view('backend.admin.index');
    // }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $admin = User::find($id);

        return view('backend.admin.edit', compact('admin'));
    }
}
