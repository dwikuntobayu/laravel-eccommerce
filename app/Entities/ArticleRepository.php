<?php

namespace App\Entities;

// use Illuminate\Database\Eloquent\Model;
// use Prettus\Repository\Contracts\Transformable;
// use Prettus\Repository\Traits\TransformableTrait;
use InfyOm\Generator\Common\BaseRepository;
use App\Article;

class ArticleRepository extends BaseRepository
{

    /**
     * @var array
     */
    protected $fieldSearchable = [
      'title',
      'content'
    ];
    
    /**
     * Configure the Model
     **/
    public function model()
    {
        return Article::class;
    }

}
