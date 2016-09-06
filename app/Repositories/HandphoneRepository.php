<?php

namespace App\Repositories;

use App\Models\Handphone;
use InfyOm\Generator\Common\BaseRepository;

class HandphoneRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'description',
        'specification'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Handphone::class;
    }
}
