@extends('template')

@section('content')

<h3>{!! $card->title !!}</h3>

	<ul class="list-group">

		@foreach($card->notes as $note)
				
			<li class="list-group-item">{!! $note->body !!} <a href="" style="float:right;">{!! $note->user->username !!}</a></li>
				
		@endforeach

	</ul>

	<form method="POST" action="/articles/{!! $card->id !!}/notes">
		
			<div class="form-group">
				<textarea name="body" class="form-control"></textarea>
			</div>

			<div class="form-group">
				<button type="button" class="btn btn-primary">Submit</button>
			</div>

	</form>
@stop