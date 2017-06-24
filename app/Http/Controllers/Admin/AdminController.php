<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User as User;
use App\Models\Course as Course;
use App\Models\Employee as Employee;
use App\Models\EmployeeLoan as EmployeeLoan;

use App\Models\Loan as Loan;
use App\Models\LoanLimit as LoanLimit;

use Auth;

class AdminController extends Controller
{
    //

    public function dashboard()
    {   

        $users = User::all();

        return view('backend.admin.dashboard', compact('users'));
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
