<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Glass
 * @package App\Models
 * @version September 6, 2016, 4:58 pm UTC
 */
class Glass extends Model
{

    public $table = 'glasses';
    


    public $fillable = [
        'name',
        'quantity'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'name' => 'string',
        'quantity' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required',
        'quantity' => 'required'
    ];

    
}
