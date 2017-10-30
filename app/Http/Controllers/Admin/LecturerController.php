<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\User as User;
use App\Models\Role as Role;

use App\Models\LecturerUnit as LecturerUnit;

use App\Models\Blacklist as Blacklist;
use App\Models\CrbIdentityVerification as CrbIdentityVerification;

use Validator, Session;

use Input, Redirect;
use Request;
use DB;

use \Milon\Barcode\DNS1D;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $lecturers = User::all();
        $lecturers = User::whereHas('roles', function($q){
            $q->where('name', 'lecturer');
        })->get();

        return view('backend.admin.lecturer.index', compact('lecturers'));
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

        $ids = LecturerUnit::all()->pluck('course_unit_id')->toArray();

        // dd($userRoles);

        $courseUnits = \DB::table('course_units')
                        ->whereNotIn('id',  $ids)
                        ->orderBy('name', 'asc')->lists('name', 'id');

        return view('backend.admin.lecturer.create', compact('view', 'userRoles', 'courseUnits'));
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

        // dd($input);

        $validator = Validator::make($input, User::$rules);

        if ($validator->fails()) {
            return redirect()->route('admin.lecturer.create')
                ->withInput()
                ->withErrors($validator);
        } 

        if(User::where('email', '=', $input['email'])->exists()) {

            $message = "Sorry! The Email already exist. Please Login or use another email address.";
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
 
            $user                           = new User;
            $user->first_name               = $input['first_name'];
            $user->last_name                = $input['last_name'];
            $user->phone                    = $input['phone'];
            $user->email                    = $input['email'];
            $user->student_number           = NULL;


            $key = \Config::get('app.key');
            $generatedCode = hash_hmac('sha256', str_random(40), $key);
            $user->activation_code          = $generatedCode;
            $user->course_id                = $input['course_id'];
            // $user->password                = bcrypt($input['password']);
            $user->save();

            

            $role = Role::whereName("lecturer")->first();
            $user->assignRole($role);

            $lecturerUnit = new LecturerUnit;
            $lecturerUnit->user_id = $user->id;
            $lecturerUnit->course_unit_id = $user->course_id;
            $lecturerUnit->save();

            return redirect()->route('admin.lecturer.index')
            ->with('message', 'Successfully created Lecturer!');
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

        return view('backend.admin.lecturer.show', compact('user', 'crb'));
    }


    public function barcodeTest(){

        $d = new DNS1D();
        $d->setStorPath(__DIR__."/cache/");
        echo $d->getBarcodeHTML("9780691147727", "EAN13");
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
        $userRoles = \DB::table('roles')
                ->where('id', '!=', [1])
                ->where('id', '!=', [3])
                ->where('id', '!=', [4])
                ->where('id', '!=', [5])
                ->where('id', '!=', [7])
                ->orderBy('name', 'asc')->lists('name', 'id');

        $courseUnits = \DB::table('course_units')->orderBy('name', 'asc')->lists('name', 'id');

        return view('backend.admin.lecturer.edit', compact('user', 'userRoles', 'courseUnits'));
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
            'phone' => 'min:10|max:10'
        ];

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {

            return redirect()->route('admin.lecturer.edit', $id)
                ->withErrors($validator);
        } else {


            $user                           = User::find($id);
            $user->first_name               = Input::get('first_name');
            $user->last_name                = Input::get('last_name');
            $user->phone                    = Input::get('phone');
            $user->email                    = Input::get('email');
            $user->student_number           = Input::get('student_number');
            $user->valid_from               = Input::get('valid_from');
            $user->valid_to                 = Input::get('valid_to');
            

            $user->save();

            // Session::flash('message', 'Successfully created box!');   



            return redirect()->route('admin.lecturer.index')
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
        $image_name = User::where('id', $id)->value('image');
        
        $img = public_path().'/images/uploads/lecturer/'.$image_name;                        

        \File::Delete($img);

        $User = User::findOrFail($id);
        $User->delete();
        
        // Session::flash('message', 'You have successfull deleted a product');

        return redirect()->route('lecturer.index')
                ->with('message', 'You have deleted the product successfully');
    }
}
