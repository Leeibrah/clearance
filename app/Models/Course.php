<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'courses';

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

        return $this->belongsTo('App\Models\Unit', 'course_id');
    }
}
