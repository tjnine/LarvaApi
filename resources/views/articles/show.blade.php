@extends('template')

@section('content')

	 	<div class="panel panel-primary">
            <div class="panel-heading"><h3>Article</h3></div>
             <div class="panel-body">
	 			 <li style="list-style-type:none;color:#777;">
                    <h3>{!! $article->title !!}</h3>
                    <p>{!! $article->body !!}</p>
                </li>
        </div>
            </div>

@stop