<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Sky
 * @package App\Models
 * @version September 6, 2016, 5:08 pm UTC
 */
class Sky extends Model
{

    public $table = 'skies';
    


    public $fillable = [
        'name',
        'color'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'color' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'color' => 'required'
    ];

    
}
