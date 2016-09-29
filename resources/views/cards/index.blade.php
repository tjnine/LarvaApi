@extends('template')



@section('content')

	
		
	<h3 class="card-header">Cards</h3>

	<ul class="list-group">
	 	
	 	@foreach($cards as $card)
	 	
	 		<li class="list-group-item"><a href="/cards/{!! $card->id !!}">{!! $card->title !!}</a></li>

		@endforeach

	</ul>
		
	
@stop