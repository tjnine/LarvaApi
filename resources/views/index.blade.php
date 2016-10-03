@extends('template')

@section('content')

 
    <h3 class="home-title">Welcome to {!! $title !!}</h3>

    <p class="home-intro">{!! $text !!}</p>

    <ul class="no-bull">
        <li>
         {{ Html::link('articles', 'Articles API') }}
        </li>
        <li>
         {{ Html::linkRoute('article.buildForm','Create Article') }}
        </li>
    </ul>
@stop