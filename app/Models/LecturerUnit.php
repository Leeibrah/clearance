<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LecturerUnit extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'lecturer_units';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'course_unit_id'
    ];


    public static $rules = [
        
        'user_id'               => 'required',
        'course_unit_id'        => 'required',
    ];

}
