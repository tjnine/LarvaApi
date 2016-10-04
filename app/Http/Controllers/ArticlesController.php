<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Database\Eloquent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Container\Container as App;
use SuperModels\Repositories\Criteria\Articles\AuthorIsTeej;
use SuperModels\Repositories\ArticleRepository as ArticleRepo;
use Models\Article;

class ArticlesController extends Controller
{
    public $article;

    public function __construct(ArticleRepo $articleRepo)
    {
    	$this->article = $articleRepo;
    }

    public function all()
    {
        $articles = Article::all();
        return view('articles.all', ['articles' => $articles]);
    }

    public function index() 
    {
        // $articles = \DB::select('select * from articles');
        // return view('articles.index', ['articles' => $articles]);
    
    header('content-type: application/json');
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, PATCH, DELETE');
             $statusCode = 200;

             $this->article->pushCriteria(new AuthorIsTeej());
             return \Response::json([
            'articles' => $this->article->all()], $statusCode);
       
         // foreach($articles as $article) {
         //     $response['articles'][] = [ 
         //        'id'    =>  $article->id,
         //        'body'  =>  $article->body,
         //        'title' =>  $article->title
         //    ];
         // }
           // $articles = $this->article->all();     
           // return Response::json([
           //  'articles'  => $articles->toArray()
           //  ], $statusCode);   
 
    }

    public function show($id) 
    {
        $article = $this->article->find($id);

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request, App $app)
    {
        $title = $request->get('title');
        $body = $request->get('body');
        
        $criteria = $request->all();
        Article::create($criteria);

        return redirect('allarticles');
    }
}
