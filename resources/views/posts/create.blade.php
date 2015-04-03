
@extends('app')

@section('content')
	
	<h1>Créer un nouveau post</h1>

	{!! Form::open(array('url' => 'posts')) !!}
	    
		@include('posts/_form')

		{!! Form::submit('Envoyer', array('class' => 'btn btn-info pull-right')) !!}

	{!! Form::close() !!}

@stop