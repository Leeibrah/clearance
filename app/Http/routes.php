<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


/*
|--------------------------------------------------------------------------
| The Web Middleware
|--------------------------------------------------------------------------
*/

// Remove to Enable Errors
// Route::group(['middleware' => ['web']], function () {

	
	//testing environment... ;)
	Route::get('environment', function(){
		if (App::environment('local', 'staging'))
		{
		   echo 'Yo dawg, the environment is '.App::environment();
		}
		else {
		   echo 'We are on '.App::environment();
		}
	});
	 
	//run tests ...
	Route::get('tests', function(){

	    return ucwords($_SERVER['SERVER_NAME']);
	});


	Route::get('choose', ['as' => 'choose',  'uses' => 'Auth\AuthController@choose']);

	$a = 'auth.';
	Route::get('/login',            ['as' => $a . 'login',          'uses' => 'Auth\AuthController@getLogin']);
	Route::post('/login',           ['as' => $a . 'login.post',     'uses' => 'Auth\AuthController@postLogin']);

	Route::group(['prefix' => 'user'], function()
	{
		$a = 'auth.';
		Route::get('/register',         ['as' => $a . 'register',       'uses' => 'Auth\AuthController@getRegister']);
		Route::post('/register',        ['as' => $a . 'register.post',  'uses' => 'Auth\AuthController@postRegister']);
	});

	Route::group(['prefix' => 'employee'], function()
	{
		$a = 'auth.';
		Route::get('/register',         ['as' => $a . 'employee.register',       'uses' => 'Auth\AuthController@getEmployeeRegister']);
		Route::post('/register',        ['as' => $a . 'employee.register.post',  'uses' => 'Auth\AuthController@postEmployeeRegister']);
	});

	Route::group(['prefix' => 'company'], function()
	{
		$a = 'auth.';
		Route::get('/register',         ['as' => $a . 'company.register',       'uses' => 'Auth\AuthController@getCompanyRegister']);
		Route::post('/register',        ['as' => $a . 'company.register.post',  'uses' => 'Auth\AuthController@postCompanyRegister']);
	});

	// Password Reset
	Route::controllers([
		'password' => 'Auth\PasswordController',
	]);


	Route::get('logout', function(){
	    Auth::logout();
	    return redirect()->route('home');
	});

	Route::get('/', 'FrontendController@index')->name('home');
	Route::get('home', 'FrontendController@index')->name('home');


	Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function()
	{
		$a = 'admin.';
		Route::get('dashboard', array('as' => $a. 'dashboard', 'uses' => 'Admin\AdminController@dashboard'));
		Route::get('finances', array('as' => $a. 'finances', 'uses' => 'Admin\AdminController@finances'));

		Route::get('/{adminId}/edit', ['as' => $a. 'edit', 'uses' => 'Admin\AdminController@edit']);
		
		Route::get('support', array('as' => $a. 'support', 'uses' => 'Admin\PagesController@support'));

		// Route::get('support', 'Admin\PagesController@support')->name('admin.support');		
				
		// Route::get('support', 'Admin\PagesController@support')->name('support');		


		Route::get('index', array('as' => $a. 'dash', 'uses' => 'Admin\AdminController@index'));

		Route::group(['prefix' => 'salary-advance'], function()
		{
			Route::group(['prefix' => 'users'], function()
			{
				Route::resource('/', 'Admin\UserController');
			});
		});


		Route::group(['prefix' => 'students'], function()
		{
			$u = 'admin.users.';
			Route::get('/', ['as' => $u. 'index', 'uses' => 'Admin\UserController@index']);

			Route::get('create', array('as' => $u. 'create', 'uses' => 'Admin\UserController@create'));
		    Route::post('create', array('as' => $u. 'store', 'uses' => 'Admin\UserController@store'));
			Route::get('/{userId}', ['as' => $u. 'show', 'uses' => 'Admin\UserController@show']);
			Route::get('/{userId}/edit', ['as' => $u. 'edit', 'uses' => 'Admin\UserController@edit']);
			Route::post('/{userId}/update', array('as' => $u. 'update', 'uses' => 'Admin\UserController@update'));
		    Route::get('/{userId}/delete', array('as' => $u. 'delete', 'uses' => 'Admin\UserController@destroy'));
		    Route::get('/{userId}/restore', array('as' =>  $u.'restore', 'uses' => 'Admin\UserController@getRestore'));

		    Route::get('verify/all', ['as' => $u. 'verify.all', 'uses' => 'Admin\UserController@verifyAll']);
		    Route::get('unverify/all', ['as' => $u. 'unverify.all', 'uses' => 'Admin\UserController@unVerifyAll']);
		    Route::post('/single/verify', ['as' => $u. 'single.verify', 'uses' => 'Admin\UserController@singleVerification']);
		});

		Route::group(['prefix' => 'lecturer'], function()
		{
			$u = 'admin.lecturer.';
			Route::get('/', ['as' => $u. 'index', 'uses' => 'Admin\LecturerController@index']);

			Route::get('create', array('as' => $u. 'create', 'uses' => 'Admin\LecturerController@create'));
		    Route::post('create', array('as' => $u. 'store', 'uses' => 'Admin\LecturerController@store'));
			Route::get('/{userId}', ['as' => $u. 'show', 'uses' => 'Admin\LecturerController@show']);
			Route::get('/{userId}/edit', ['as' => $u. 'edit', 'uses' => 'Admin\LecturerController@edit']);
			Route::post('/{userId}/update', array('as' => $u. 'update', 'uses' => 'Admin\LecturerController@update'));
		    Route::delete('/{userId}/delete', array('as' => $u. 'delete', 'uses' => 'Admin\LecturerController@destroy'));
		    Route::get('/{userId}/restore', array('as' =>  $u.'restore', 'uses' => 'Admin\LecturerController@getRestore'));
		});


		Route::group(['prefix' => 'cl'], function()
		{
			$c = 'admin.cl.';
			Route::get('/', ['as' => $c. 'index', 'uses' => 'Admin\ClController@index']);
			Route::get('create', array('as' => $c. 'create', 'uses' => 'Admin\ClController@create'));
		    Route::post('create', array('as' => $c. 'store', 'uses' => 'Admin\ClController@store'));
			Route::get('/{classId}', ['as' => $c. 'show', 'uses' => 'Admin\ClController@show']);
			Route::get('/{classId}/edit', ['as' => $c. 'edit', 'uses' => 'Admin\ClController@edit']);
			Route::post('/{classId}/update', array('as' => $c. 'update', 'uses' => 'Admin\ClController@update'));
		    Route::delete('/{classId}/delete', array('as' => $c. 'delete', 'uses' => 'Admin\ClController@destroy'));
		    Route::get('/{classId}/restore', array('as' =>  $c.'restore', 'uses' => 'Admin\ClController@getRestore'));

		});

		Route::group(['prefix' => 'course'], function()
		{
			$c = 'admin.course.';
			Route::get('/', ['as' => $c. 'index', 'uses' => 'Admin\CourseController@index']);
			Route::get('create', array('as' => $c. 'create', 'uses' => 'Admin\CourseController@create'));
		    Route::post('create', array('as' => $c. 'store', 'uses' => 'Admin\CourseController@store'));
			Route::get('/{courseId}', ['as' => $c. 'show', 'uses' => 'Admin\CourseController@show']);
			Route::get('/{courseId}/edit', ['as' => $c. 'edit', 'uses' => 'Admin\CourseController@edit']);
			Route::get('/{courseId}/activate', ['as' => $c. 'activate', 'uses' => 'Admin\CourseController@activate']);
			Route::get('/{courseId}/deactivate', ['as' => $c. 'deactivate', 'uses' => 'Admin\CourseController@deactivate']);
			Route::post('/{courseId}/update', array('as' => $c. 'update', 'uses' => 'Admin\CourseController@update'));
		    Route::delete('/{courseId}/delete', array('as' => $c. 'delete', 'uses' => 'Admin\CourseController@destroy'));
		    Route::get('/{courseId}/restore', array('as' =>  $c.'restore', 'uses' => 'Admin\CourseController@getRestore'));

			Route::get('send/limit/users', array('as' => 'send.limit.users', 'uses' => 'Admin\CourseController@sendLoanLimitUsers'));		    
		});

		Route::group(['prefix' => 'unit'], function()
		{
			$c = 'admin.unit.';
			Route::get('/', ['as' => $c. 'index', 'uses' => 'Admin\UnitController@index']);
			Route::get('create', array('as' => $c. 'create', 'uses' => 'Admin\UnitController@create'));
		    Route::post('create', array('as' => $c. 'store', 'uses' => 'Admin\UnitController@store'));
			Route::get('/{unitId}', ['as' => $c. 'show', 'uses' => 'Admin\UnitController@show']);
			Route::get('/{unitId}/edit', ['as' => $c. 'edit', 'uses' => 'Admin\UnitController@edit']);
			Route::post('/{unitId}/update', array('as' => $c. 'update', 'uses' => 'Admin\UnitController@update'));
		    Route::delete('/{unitId}/delete', array('as' => $c. 'delete', 'uses' => 'Admin\UnitController@destroy'));
		    Route::get('/{unitId}/restore', array('as' =>  $c.'restore', 'uses' => 'Admin\UnitController@getRestore'));

		    Route::get('/checkin/{unitSlug}', array('as' => $c. 'checkin', 'uses' => 'Admin\UnitController@checkin'));
		});

		Route::group(['prefix' => 'attendance'], function()
		{
			$a = 'admin.attendance.';
			Route::get('/', ['as' => $a. 'index', 'uses' => 'Admin\AttendanceController@index']);

			Route::get('create', array('as' => $a. 'create', 'uses' => 'Admin\AttendanceController@create'));
		    Route::post('create', array('as' => $a. 'store', 'uses' => 'Admin\AttendanceController@store'));

		    Route::get('/{studentAttendance}', ['as' => $a. 'show', 'uses' => 'Admin\AttendanceController@show']);
		});

		Route::get('barcode', 'Admin\UserController@barcodeTest');
	});


	Route::group(['prefix' => 'user', 'middleware' => 'auth'], function()
	{

		$u = 'user.';
		Route::get('dashboard', array('as' => $u. 'dashboard', 'uses' => 'UserController@dashboard'));

		Route::get('index', array('as' => $u. 'index', 'uses' => 'UserController@index'));
		Route::get('profile', array('as' => $u. 'profile', 'uses' => 'UserController@profile'));

		Route::get('/{userId}', ['as' => $u. 'show', 'uses' => 'UserController@show']);

		Route::get('{userId}/edit', array('as' => $u. 'edit', 'uses' => 'UserController@edit'));
		Route::post('{userId}/update', array('as' => $u. 'update', 'uses' => 'UserController@update'));

		Route::get('{userId}/loans', array('as' => $u. 'loans.index', 'uses' => 'UserController@loans'));
	
		Route::group(['prefix' => 'employee'], function()
		{
			$e = 'employee.';
			Route::get('/', ['as' => $e. 'index', 'uses' => 'EmployeeController@index']);
			Route::get('/{employeeId}/registration', ['as' => $e. 'registration', 'uses' => 'EmployeeController@registerEmployee']);
			Route::get('create', array('as' => $e. 'create', 'uses' => 'EmployeeController@create'));
		    Route::post('create', array('as' => $e. 'store', 'uses' => 'EmployeeController@store'));
			Route::get('/{employeeId}', ['as' => $e. 'show', 'uses' => 'EmployeeController@show']);
			Route::get('/{employeeId}/edit', ['as' => $e. 'edit', 'uses' => 'EmployeeController@edit']);
			Route::post('/{employeeId}/update', array('as' => $e. 'update', 'uses' => 'EmployeeController@update'));
		    Route::delete('/{employeeId}/delete', array('as' => $e. 'delete', 'uses' => 'EmployeeController@destroy'));
		    Route::get('/{employeeId}/restore', array('as' =>  $e.'restore', 'uses' => 'EmployeeController@getRestore'));
		});

		Route::group(['prefix' => 'loans'], function()
		{
			$l = 'user.loans.';
			Route::get('/', ['as' => $l. 'index', 'uses' => 'UserController@loans']);
			Route::get('create', array('as' => $l. 'create', 'uses' => 'UserController@create'));
		    Route::post('create', array('as' => $l. 'store', 'uses' => 'UserController@store'));
			Route::get('/{loanId}', ['as' => $l. 'show', 'uses' => 'UserController@show']);
			Route::get('/{loanId}/edit', ['as' => $l. 'edit', 'uses' => 'UserController@edit']);
			Route::post('/{loanId}/update', array('as' => $l. 'update', 'uses' => 'UserController@update'));
		    Route::delete('/{loanId}/delete', array('as' => $l. 'delete', 'uses' => 'UserController@destroy'));
		    Route::get('/{loanId}/restore', array('as' =>  $l.'restore', 'uses' => 'UserController@getRestore'));
		});


	});

	Route::get('fake/user', 'Auth\AuthController@fakeUser');



// });