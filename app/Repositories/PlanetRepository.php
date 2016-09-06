<?php

namespace App\Repositories;

use App\Models\Planet;
use InfyOm\Generator\Common\BaseRepository;

class PlanetRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Planet::class;
    }
}
