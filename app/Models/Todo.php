<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $fillable = [
      'text', 'user_id', 'completed'
    ];
    
    // protected $casts = [
        // 'text' => 'string',
        // 'user_id' => 'string',
        // 'completed' => 'string'
    // ];
}
