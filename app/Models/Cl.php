<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cl extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'classes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];


    public static $rules = [
        
        'name' => 'required',
    ];

}
