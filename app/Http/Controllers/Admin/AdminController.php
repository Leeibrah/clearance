<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User as User;
use App\Models\Department as Department;


use Auth;

class AdminController extends Controller
{
    //

    public function dashboard()
    {   

        $users = User::all();

        $studentsCount = User::where('is_admin',0)->count();
        $departmentsCount = Department::all()->count();

        return view('backend.admin.dashboard', compact('users', 'studentsCount', 'departmentsCount'));
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
