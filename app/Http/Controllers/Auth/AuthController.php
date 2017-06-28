<?php

namespace App\Http\Controllers\Auth;

use App\Models\User as User;
use App\Models\Role as Role;

use App\Http\Controllers\Controller;
// use App\Logic\User\UserRepository;
// use App\Logic\Employee\EmployeeRepository;
// use App\Logic\Company\CompanyRepository;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\MessageBag;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use App\Traits\CaptchaTrait;

use Validator, Auth;
use Redirect;
use Input;

use DB;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;
    // use CaptchaTrait;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $loginPath = '/login';
    // protected $redirectTo = '/user/products';
    protected $redirectAfterLogout = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

    protected $auth;

    // protected $userRepository;

    // protected $employeeRepository;

    // protected $businessRepository;

    public function __construct( Guard $auth )
    {

        $this->auth = $auth;
        // $this->userRepository       = $userRepository;
        // $this->employeeRepository   = $employeeRepository;
        // $this->companyRepository    = $companyRepository;
        // $this->captchaTrait = $captchaTrait;
    }


    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function choose()
    {
        return view('auth.choose');
    }

    public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin()
    {
        $email      = Input::get('email');
        $password   = Input::get('password');
        $remember   = 1;

        // dd($email);

        if($this->auth->attempt([
            'email'     => $email,
            'password'  => $password
        ], $remember == 1 ? true : false))
        {
            
            if( Auth::user()->hasRole('admin'))
            {                
                return redirect()->route('admin.dashboard');
            }else{

                $message = "Only Admins";
                return redirect()->back()
                    ->withErrors($message)
                    ->withInput();
            }               
        }
        else
        {
    
            $message = "Incorrect email or password.";
            return redirect()->back()
                ->withErrors($message)
                ->withInput();
        }

    }

    public function getLogout()
    {
        \Auth::logout();

        // return redirect()->route('auth.login')
        Session::flush();
        return redirect('/')
            ->with('status', 'success')
            ->with('message', 'Logged out');

    }    

    public function getRegister()
    {

        return view('auth.register');
    }

    public function getEmployeeRegister()
    {
        // $categories =  Category::all();
        return view('auth.employee.register', compact('categories'));
    }

    public function getCompanyRegister()
    {
        // $categories =  Category::all();
        return view('auth.company.register', compact('categories'));
    }

    public function postRegister()
    {
        $input = Input::all();

        dd($input);
        
        $validator = Validator::make($input, User::$rules, User::$messages);
        if($validator->fails())
        {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }   

        $data = [
            'first_name'        => $input['first_name'],
            'last_name'         => $input['last_name'],
            'email'             => $input['email'],
            'password'          => $input['password'],
            'phone'             => $input['phone']

        ];
        
        $user                   = new User;
        
        $user->first_name       = ucfirst($data['first_name']);
        $user->last_name        = ucfirst($data['last_name']);
        $user->email            = $data['email'];
        $user->password         = bcrypt($data['password']);
        $user->phone            = ucfirst($data['phone']);        
        
        // dd($user);
        $key = \Config::get('app.key');
        $activationCode = hash_hmac('sha256', str_random(40), $key);
        
        $user->activation_code  = $activationCode;
        $user->active           = 1;
        $user->save();

        //Assign Role
        $role = Role::whereName('user')->first();
        $user->assignRole($role);

        $data = [
                'id'            => $user->id,
                'first_name'    => $user->first_name,
                'last_name'     => $user->last_name,
                // 'subject'       => 'Stawika acoount Activation',
                // 'activationUrl' => URL::route('activate', $user->activation_code),
                // 'domain'        => 'Stawika.com',
                'email'         => $user->email
            ];

        $userdata = array(
                'email'         => $data['email'],
                'password'      => $data['password']
            );

        if ( Auth::attempt($userdata) ) {
            $user = Auth::user();
            $user_id = $user->id;

            return Redirect::route('user.dashboard');
        }else{
            var_dump('error');
        }
    }

    public function postEmployeeRegister()
    {
        $input = Input::all();
        $validator = Validator::make($input, User::$rules, User::$messages);
        if($validator->fails())
        {
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

        $data = [
            'first_name'        => $input['first_name'],
            'last_name'         => $input['last_name'],
            'email'             => $input['email'],
            'password'          => $input['password'],
            'phone'             => $input['phone']

        ];
        
        $this->employeeRepository->register($data);

        $userdata = array(
                'email'         => $data['email'],
                'password'      => $data['password']
            );

        if ( Auth::attempt($userdata) ) {
            $user = Auth::user();
            $user_id = $user->id;

            return Redirect::route('employee.registration');
        }else{
            var_dump('error');
        }
    }


    public function fakeUser(){

        $user                   = new User;
        
        $user->first_name       = 'Admin';
        $user->last_name        = 'Admin';
        $user->email            = 'admin@admin.com';
        $user->password         = bcrypt('admin');      
        $user->phone            = '0720 000 000';       
        $user->student_number             = '0000';    
        
        $key = \Config::get('app.key');
        $activationCode = hash_hmac('sha256', str_random(40), $key);
        
        $user->activation_code  = $activationCode;
        $user->active           = 1;
        $user->save();

        //Assign Role
        $role = Role::whereName('admin')->first();
        $user->assignRole($role);

        dd('Done');
    }

    /**
     * User account activation page.
     *
     * @param  string  $actvationCode
     * @return
     */
    public function getActivate($activationCode = null)
    {
        // Is the user logged in?
        
        Auth::check();
        // Get the user we are trying to activate
        // $user = User::where('activation_code', $activationCode)->exists();
        $user = User::where('activation_code', $activationCode)->first();
        // dd($user);

        // Try to activate this user account
        if (User::where('activation_code', $activationCode)->exists())
        {

            $update_table = DB::table('users')
                ->where('activation_code', '=', $user['activation_code'])
                ->update(['activated' => 1]);

            // Redirect to the login page
            $message = 'Activated your Account';
            return Redirect::route('auth.login')->with('message', $message);
        }else{

            // The activation failed.
            $message = 'Error occured. Not activated';
            return Redirect::route('auth.login')->with('message', $message);
        }
        
    }


    public function newUser(){

        $user = new User;
        $user->email            = 'email@email.com';
        $user->first_name       = 'first_name';
        $user->last_name        = 'last_name';
        // $user->username         = 'username';
        $user->password         = brcypt('password');
        $user->save();

    }
}
