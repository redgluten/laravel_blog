
@extends('app')

@section('content')
	<h1>{{ $post->title }} <small>de : {{ $post->user->name }}</small></h1>

	<p>{{ $post->content }}</p>
@stop