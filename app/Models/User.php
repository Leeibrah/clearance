<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'created_at'
    ];


    /**
     * The attributes excluded from the model's JSON form. BIT-C006-0295/14
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'activated', 'activation_code'];

    public static $rules = [
        'first_name'            => 'required',
        'last_name'             => 'required',
        'phone'                 => 'required||min:10|max:10',
        'email'                 => 'required|email|unique:users',
        'password'              => 'min:7|regex:/^[a-zA-Z\d]+$/',
        'registration_number'   => 'min:16|max:16'
    ];

    public static $messages = [
        'first_name.required'           => 'First Name is required',
        'last_name.required'            => 'Last Name is required',
        // 'username.required'          => 'User Name is required',
        // 'username.taken'             => 'User Name is already taken',
        'email.required'                => 'Email is required',
        'email.email'                   => 'Email is invalid',
        'phone.required'                => 'Phone is required',
        'password.required'             => 'Password is required',
        'password.min'                  => 'Password needs to have at least 7 characters',
        'password.max'                  => 'Password maximum length is 20 characters with numbers',
    ];

  

    public function employee(){

        return $this->belongsTo('App\Models\Employee', 'user_id');
    }

    public function getIsAdminAttribute()
    {
        return true;
    }
}
