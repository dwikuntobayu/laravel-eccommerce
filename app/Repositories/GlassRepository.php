<?php

namespace App\Repositories;

use App\Models\Glass;
use InfyOm\Generator\Common\BaseRepository;

class GlassRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'quantity'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Glass::class;
    }
}
