@extends('template')

@section('content')

{!! Form::open(['route'=>'article.post']) !!}
 <input name="_token" hidden value="{!! csrf_token() !!}" />
 
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author', null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Add', null, ['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

@stop