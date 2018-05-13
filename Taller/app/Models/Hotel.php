<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Hotel
 * @package App\Models
 * @version May 12, 2018, 7:13 pm UTC
 */
class Hotel extends Model
{
    use SoftDeletes;

    public $table = 'hotels';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'name',
        'city',
        'cost',
        'startNumber',
        'address',
        'ratingAverage'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'city' => 'string',
        'cost' => 'integer',
        'startNumber' => 'integer',
        'address' => 'string',
        'ratingAverage' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'city' => 'required',
        'cost' => 'numeric|required',
        'startNumber' => 'required|numeric|digits_between:1,5',
        'address' => 'required'
    ];

     public function comments(){
            return $this->hasMany('App\Models\Comment');
     }

     public function scopeName($query, $name){
        $query ->where('name',$name);
     }

}
