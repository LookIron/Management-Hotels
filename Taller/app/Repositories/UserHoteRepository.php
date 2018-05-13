<?php

namespace App\Repositories;

use App\Models\UserHote;
use InfyOm\Generator\Common\BaseRepository;

class UserHoteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'email',
        'password'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return UserHote::class;
    }
}
