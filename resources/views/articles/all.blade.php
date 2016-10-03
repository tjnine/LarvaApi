@extends('template')

@section('content')

    <h2>Digg Photos</h2>
    <ul class="list-group">
        

                    <li class="list-group-item">
                    <a href="">{!! $title !!}</a>
                    <p>{!! $body !!}</p>
                   
                </li>

  
    </ul>
    <hr>
    <p>This collection is from the call of...
    <br>
    <pre style="width:500px;">$articles = \DB::select('* from articles');</pre>
    </p>

@stop