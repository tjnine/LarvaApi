@extends('template')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading"><h2>Articles</h2></div>
        <div class="panel-body">
            <ul class="list-group">
        
        @foreach($articles as $article)
    
                    <li class="list-group-item">
                    <a href="articles/{!! $article->id !!}">{!! $article->title !!}</a>
                    <p>{!! $article->body !!}</p>
                    </li>
        @endforeach

  
            </ul>
        </div>
    </div>
    <hr>
    <p>Generic collection call...
    <br>
    <pre style="width:500px;">$articles = \DB::select('* from articles');</pre>
    </p>

@stop