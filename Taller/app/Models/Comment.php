<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * @package App\Models
 * @version May 12, 2018, 8:35 pm UTC
 */
class Comment extends Model
{
    use SoftDeletes;

    public $table = 'comments';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
        'description',
        'rating',
        'hotel_id',
        'userHotel_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'description' => 'string',
        'rating' => 'integer',
        'hotel_id' => 'integer',
        'userHotel_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'rating' => 'numeric'
    ];

    public function hotel(){
        return $this->hasOne('app\Models\Hotel','id');
    }
    public function usersHotel(){
        return $this->hasOne('app\Models\UserHote','id');
    }

    
}
