<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RoleUser extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'role_user';

    public $timestamps = true;

    // protected $fillable = ['name'];

}
