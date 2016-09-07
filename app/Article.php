<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class ArticleController
 *
 * @author  The scaffold-interface created at 2016-09-06 03:39:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Article extends Model
{
    protected $table = 'articles';

    public $fillable = [
        'title',
        'content'
    ];
}
