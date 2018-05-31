<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clearance extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'clearance';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'code'
    ];


    public static $rules = [
        
        'code' => 'required',
    ];
}
