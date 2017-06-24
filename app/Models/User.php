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
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token', 'activated', 'activation_code'];

    public static $rules = [
        'first_name'            => 'required',
        'last_name'             => 'required',
        'phone'                 => 'required'       
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
        'password.min'                  => 'Password needs to have at least 2 characters',
        'password.max'                  => 'Password maximum length is 20 characters',
        'g-recaptcha-response.required' => 'Captcha is required'
    ];

    public function roles()
    {
        return $this->belongsToMany('App\Models\Role')->withTimestamps();
    }


    public function hasRole($name)
    {
        foreach($this->roles as $role)
        {
            if($role->name == $name) return true;
        }

        return false;
    }

    public function employee(){

        return $this->belongsTo('App\Models\Employee', 'user_id');
    }


    public function assignRole($role)
    {
        return $this->roles()->attach($role);
        // return $this->roles()->sync($role, $detaching = true);
    }

    public function is_admin(){
        return $this->roles()->where('role_id', 1)->first();
    }
    
    public function isAdmin(){
        return $this->roles()->where('role_id', 1)->first();
    }

    public function isCompany(){
        return $this->roles()->where('role_id', 2)->first();
    }        

    public function isUser(){
        return $this->roles()->where('role_id', 3)->first();
    }  

    public function isEmployee(){
        return $this->roles()->where('role_id', 4)->first();
    }

    public function isModerator(){
        return $this->roles()->where('role_id', 5)->first();
    }

    public function getIsAdminAttribute()
    {
        return true;
    }
}
