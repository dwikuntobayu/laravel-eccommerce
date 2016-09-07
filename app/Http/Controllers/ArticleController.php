<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateArticleRequest;
use App\Entities\ArticleRepository;
use App\Article;
use Amranidev\Ajaxis\Ajaxis;
use URL;
use Flash;
/**
 * Class ArticleController
 *
 * @author  The scaffold-interface created at 2016-09-06 03:39:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class ArticleController extends AppBaseController
{
    private $articleRepository;
    public function __construct(ArticleRepository $articleRepo)
    {
        $this->articleRepository = $articleRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return  \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\Response
     */
    public function store(CreateArticleRequest $request)
    {
        $input = $request->all();
        $article = $this->articleRepository->create($input);
        Flash::success('Article saved successfully.');
        return redirect(route('article.index'));

        // $article = new Article();
        // $article->title = $request->title;
        // $article->content = $request->content;
        // $article->save();
        // return redirect('article');
    }

    /**
     * Display the specified resource.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function show($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('article/'.$id);
        }

        $article = Article::findOrfail($id);
        return view('article.show',compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function edit($id,Request $request)
    {
        if($request->ajax())
        {
            return URL::to('article/'. $id . '/edit');
        }

        $article = Article::findOrfail($id);
        return view('article.edit',compact('article'  ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param    \Illuminate\Http\Request  $request
     * @param    int  $id
     * @return  \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
        $article = Article::findOrfail($id);
        $article->title = $request->title;
        $article->content = $request->content;
        $article->save();

        return redirect('article');
    }

    /**
     * Delete confirmation message by Ajaxis.
     *
     * @link      https://github.com/amranidev/ajaxis
     * @param    \Illuminate\Http\Request  $request
     * @return  String
     */
    public function DeleteMsg($id,Request $request)
    {
        $msg = Ajaxis::MtDeleting('Warning!!','Would you like to remove This?','/article/'. $id . '/delete/');
        if($request->ajax())
        {
            return $msg;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param    int $id
     * @return  \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::findOrfail($id);
        $article->delete();
        return URL::to('article');
    }
}
