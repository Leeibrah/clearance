<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User as User;

use App\Models\Blacklist as Blacklist;
use App\Models\CrbIdentityVerification as CrbIdentityVerification;

use Validator, Session;

use Input, Redirect;
use Request;

use \Milon\Barcode\DNS1D;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::where('is_admin', 0)->get();

        return view('backend.admin.users.index', compact('users'));
    }

    public function unverified()
    {
        $users = User::where('phone_verified', 0)->get();

        return view('backend.admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $view = '';
        $userRoles = \DB::table('roles')->where('id', '!=', [1])->orderBy('name', 'asc')->lists('name', 'id');
        // $courses = \DB::table('courses')->orderBy('name', 'asc')->lists('name', 'id');

        return view('backend.admin.users.create', compact('view', 'userRoles'));
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
        dd($input);

        $validator = Validator::make($input, User::$rules);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        } 

        if(User::where('email', '=', $input['email'])->exists()) {

            $message = "Sorry! The Email already exist. Please Login or use another email address.";
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        }

        if(User::where('registration_number', '=', $input['registration_number'])->exists()) {

            $message = "Sorry! The Student Number already exist in our Records. Please Login to your Account";
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        }

        // $phoneNumber = "+254".intval($input['phone']);
        if(User::where('phone', '=', $input['phone'])->exists()) {

            $message = "Sorry! The Phone Number already exist in our Records. Please Login to your account or contact Customer Service.";
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        }else{
            // store

            dd('Ready to store');
            $user                           = new User;
            $user->first_name               = $input['first_name'];
            $user->last_name                = $input['last_name'];
            $user->phone                    = $input['phone'];
            $user->email                    = $input['email'];
            $user->registration_number           = $input['registration_number'];
            $user->valid_from               = $input['valid_from'];
            $user->valid_to                 = $input['valid_to'];

            $key = \Config::get('app.key');
            $generatedCode = hash_hmac('sha256', str_random(40), $key);
            $user->activation_code          = $generatedCode;
            $user->course_id                = $input['course_id'];
            $user->save();

            $role = Role::whereName("student")->first();
            $user->assignRole($role); 

            return redirect()->route('admin.users.index')
            ->with('message', 'Successfully created user!');
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
        $user = User::find($id);

        $crb = CrbIdentityVerification::where('user_id', $user->id)->first();
        // $creditInfo = CreditInfo::where('user_id', $employee->user_id)->first();

        return view('backend.admin.users.show', compact('user', 'crb'));
    }


    public function barcodeTest(){

        echo DNS1D::getBarcodeHTML("BIT-C006-0581/13", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0295/14", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0616/13", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0656/13", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0219/14", "C128B");

        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0431/14", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0384/14", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0404/14", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0336/14", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0338/14", "C128B");
        echo "<br>";
        echo DNS1D::getBarcodeHTML("BIT-C006-0333/14", "C128B");


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $view = '';
        $userRoles = \DB::table('roles')->where('id', '!=', [1])->orderBy('name', 'asc')->lists('name', 'id');
        $courses = \DB::table('courses')->orderBy('name', 'asc')->lists('name', 'id');


        return view('backend.admin.users.edit', compact('user', 'userRoles', 'courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');

        $rules = [
            'first_name'            => 'required',
            'last_name'             => 'required',
            'phone'                 => 'required||min:10|max:10',
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return redirect()->route('admin.users.edit', $id)
                ->withErrors($validator);
        } else {

            $user                           = User::find($id);
            $user->first_name               = Input::get('first_name');
            $user->last_name                = Input::get('last_name');
            $user->phone                    = Input::get('phone');
            $user->email                    = Input::get('email');
            $user->registration_number      = Input::get('registration_number');
            $user->valid_from               = Input::get('valid_from');
            $user->valid_to                 = Input::get('valid_to');
            

            $user->save();

            // Session::flash('message', 'Successfully created box!');   



            return redirect()->route('admin.users.index')
            ->with('message', 'Successfully created User!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $User = User::findOrFail($id);
        $User->delete();
        
        // Session::flash('message', 'You have successfull deleted a product');

        return redirect()->route('admin.users.index')
                ->with('message', 'You have deleted the user successfully');
    }
}
