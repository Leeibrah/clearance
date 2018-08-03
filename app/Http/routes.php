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

	Route::group(['prefix' => 'clearance'], function()
	{
		$u = 'admin.clearance.';
		Route::get('/', ['as' => $u. 'index', 'uses' => 'Admin\ClearanceController@index']);

		Route::get('create', array('as' => $u. 'create', 'uses' => 'Admin\ClearanceController@create'));
	    Route::post('create', array('as' => $u. 'store', 'uses' => 'Admin\ClearanceController@store'));
		Route::get('/{userId}', ['as' => $u. 'show', 'uses' => 'Admin\ClearanceController@show']);
		Route::get('/{userId}/edit', ['as' => $u. 'edit', 'uses' => 'Admin\ClearanceController@edit']);
		Route::post('/{userId}/update', array('as' => $u. 'update', 'uses' => 'Admin\ClearanceController@update'));
		Route::get('/{userId}/clear', array('as' => $u. 'clear', 'uses' => 'Admin\ClearanceController@clear'));
	    Route::delete('/{userId}/delete', array('as' => $u. 'delete', 'uses' => 'Admin\ClearanceController@destroy'));
	    Route::get('/{userId}/restore', array('as' =>  $u.'restore', 'uses' => 'Admin\ClearanceController@getRestore'));
	});


	Route::group(['prefix' => 'collection'], function()
	{
		$c = 'admin.collection.';
		Route::get('/', ['as' => $c. 'index', 'uses' => 'Admin\CollectionController@index']);
		Route::get('create', array('as' => $c. 'create', 'uses' => 'Admin\CollectionController@create'));
	    Route::post('create', array('as' => $c. 'store', 'uses' => 'Admin\CollectionController@store'));
		Route::get('/{collectionassId}', ['as' => $c. 'show', 'uses' => 'Admin\CollectionController@show']);
		Route::get('/{collectionassId}/edit', ['as' => $c. 'edit', 'uses' => 'Admin\CollectionController@edit']);
		Route::post('/{collectionassId}/update', array('as' => $c. 'update', 'uses' => 'Admin\CollectionController@update'));
	    Route::delete('/{collectionassId}/delete', array('as' => $c. 'delete', 'uses' => 'Admin\CollectionController@destroy'));
	    Route::get('/{collectionassId}/restore', array('as' =>  $c.'restore', 'uses' => 'Admin\CollectionController@getRestore'));

	});

	Route::group(['prefix' => 'department'], function()
	{
		$c = 'admin.department.';
		Route::get('/', ['as' => $c. 'index', 'uses' => 'Admin\DepartmentController@index']);
		Route::get('create', array('as' => $c. 'create', 'uses' => 'Admin\DepartmentController@create'));
	    Route::post('create', array('as' => $c. 'store', 'uses' => 'Admin\DepartmentController@store'));
		Route::get('/{departmentId}', ['as' => $c. 'show', 'uses' => 'Admin\DepartmentController@show']);
		Route::get('/{departmentId}/edit', ['as' => $c. 'edit', 'uses' => 'Admin\DepartmentController@edit']);
		Route::get('/{departmentId}/activate', ['as' => $c. 'activate', 'uses' => 'Admin\DepartmentController@activate']);
		Route::get('/{departmentId}/deactivate', ['as' => $c. 'deactivate', 'uses' => 'Admin\DepartmentController@deactivate']);
		Route::post('/{departmentId}/update', array('as' => $c. 'update', 'uses' => 'Admin\DepartmentController@update'));
	    Route::delete('/{departmentId}/delete', array('as' => $c. 'delete', 'uses' => 'Admin\DepartmentController@destroy'));
	    Route::get('/{departmentId}/restore', array('as' =>  $c.'restore', 'uses' => 'Admin\DepartmentController@getRestore'));

		Route::get('send/limit/users', array('as' => 'send.limit.users', 'uses' => 'Admin\DepartmentController@sendLoanLimitUsers'));		    
	});

});


Route::group(['prefix' => 'user', 'middleware' => 'auth'], function()
{


});

Route::get('fake/user', 'Auth\AuthController@fakeUser');



// });