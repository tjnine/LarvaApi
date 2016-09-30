<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use SuperModels\Repositories\ArticleRepository as Article;


class ArticlesController extends Controller
{
    public $article;

    public function __construct(Article $article)
    {
    	$this->article = $article;
    	header('content-type: application/json');
    }

    public function index() {
        // $articles = \DB::select('select * from articles');
        // return view('articles.index', ['articles' => $articles]);
    
    header('content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
         $statusCode = 200;
         // $response = [
         //    'articles' => []
         // ];
         
         $articles = $this->article->all();     
       
         // foreach($articles as $article) {
         //     $response['articles'][] = [ 
         //        'id'    =>  $article->id,
         //        'body'  =>  $article->body,
         //        'title' =>  $article->title
         //    ];
         // }
           return Response::json([
            'articles'  => $articles->toArray()
            ], $statusCode);   
 
    }

    public function show($id) {
        $article = $this->article->show($id);

        return view('articles.show', ['article' => $article]);
    }
}
