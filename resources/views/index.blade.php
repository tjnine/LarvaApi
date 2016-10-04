@extends('template')

@section('content')

 
    <h3 class="home-title">Welcome to {!! $title !!}</h3>

    <p class="home-intro">{!! $text !!}</p>

    <ul class="no-bull">
        <li><h3>Articles</h3></li>
        <li>{{ Html::link('articles', 'Articles API') }}</li>
        <li>{{ Html::linkRoute('article.buildForm','Create Article') }}</li>
        <li>{{ Html::linkAction('ArticlesController@all', 'View Articles') }}</li>
    </ul>

    <ul class="no-bull">
        <li><h3>Contacts</h3></li>
        <li>{{ Html::link('contacts', 'Contacts API') }}</li>
        <li></li>
        <li></li>
    </ul>
@stop