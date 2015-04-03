
@extends('app')

@section('content')
	
	<h1>Créer un nouveau post</h1>

	{!! Form::model($post, [
		'route'  => ['posts.update', $post->id],
		'method' => 'PUT'
	]) !!}
	    
		@include('posts/_form')

		{!! Form::submit('Enregistrer les modifications', array('class' => 'btn btn-info pull-right')) !!}

	{!! Form::close() !!}

@stop