<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'course_units';

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

    public function course_id(){

        return $this->belongsTo('App\Models\Course', 'course_id');
    }
}
