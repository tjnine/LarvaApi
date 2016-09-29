@extends('template')

@section('content')

    <h2>Digg Photos</h2>
    <ul class="list-group">
        @foreach($articles as $article)

                    <li class="list-group-item">
                    <a href="{!! $article->path() !!}">{!! $article->title !!}</a>
                    <p>{!! $article->body !!}</p>
                   
                </li>

        @endforeach
    </ul>
    <hr>
    <p>This collection is from the call of...
    <br>
    <pre style="width:500px;">$articles = \DB::select('* from articles');</pre>
    </p>

@stop