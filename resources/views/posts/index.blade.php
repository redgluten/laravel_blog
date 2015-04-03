
@extends('app')

@section('content')

	<h1>Les posts</h1>

	@foreach ($posts as $post)
	
		<div class="well clearfix">
			<h2>{!! link_to('posts/' . $post->id, $post->title) !!} <small>par : {{ $post->user->name }}</small></h2>

			<p>{!! $post->content or 'Pas de contenu' !!}</p>
			
			@include('partials/_edit-button', ['url' => 'posts/' . $post->id . '/edit/'])

			@include('partials/_delete-button', [
				'message' => 'return confirm(\'Etes-vous certain de vouloir supprimer ce post ?\')',
				'url'     => 'posts/' . $post->id
			])
		</div>

	@endforeach

	{!! link_to('posts/create', 'Créer un nouveau post', ['class' => 'btn btn-primary']) !!}

@stop