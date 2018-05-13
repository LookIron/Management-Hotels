<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class UserHote
 * @package App\Models
 * @version May 12, 2018, 8:12 pm UTC
 */
class UserHote extends Model
{
    use SoftDeletes;

    public $table = 'user_hotes';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'email',
        'password'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'email' => 'string',
        'password' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'email' => 'email',
        'password' => 'required'
    ];
    public function comments(){
            return $this->hasMany('App\Models\Comment');
     }
    
}
