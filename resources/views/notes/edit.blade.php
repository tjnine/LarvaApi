@extends('template')

@section('content')

	<form method="POST" action="/notes/{{ $note->id }}">
		{{ method_field('PATCH') }}
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			<div class="form-group">
				<textarea name="body" class="form-control">{{ $note->body }}</textarea>
			</div>

			<div class="form-group">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>

	</form>

@stop