<?php

namespace App\Repositories;

use App\Models\Sky;
use InfyOm\Generator\Common\BaseRepository;

class SkyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'color'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Sky::class;
    }
}
