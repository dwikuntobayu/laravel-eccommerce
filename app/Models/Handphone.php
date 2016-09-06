<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Handphone
 * @package App\Models
 * @version September 6, 2016, 4:54 pm UTC
 */
class Handphone extends Model
{

    public $table = 'handphones';
    


    public $fillable = [
        'name',
        'description',
        'specification'
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
        'name' => 'required|min:2',
        'description' => 'required|min:10',
        'specification' => 'required'
    ];

    
}
