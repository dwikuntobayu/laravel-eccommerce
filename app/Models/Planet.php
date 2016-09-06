<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Planet
 * @package App\Models
 * @version September 6, 2016, 5:35 pm UTC
 */
class Planet extends Model
{

    public $table = 'planets';
    


    public $fillable = [
        'name',
        'description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'description' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'description' => 'required'
    ];

    
}
