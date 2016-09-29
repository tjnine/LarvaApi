@extends('template')

@section('content')
	 	
	 			 <li style="list-style-type:none;color:#fff;">
                    <h3>{!! $article->title !!}</h3>
                    <p>{!! $article->body !!}</p>
                </li>



@stop