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
        'item'
    ];


    public static $rules = [
        
        'item' => 'required',
    ];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function department()
    {
        return $this->belongsTo('App\Models\Department');
    }

}
