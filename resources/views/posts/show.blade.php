@extends('layouts.app')

@section('content')
	<a href="/posts" class="btn btn-primary">Go Back</a>
	<h3>{{$post->title}}</h3>
	<div>
		<p>{!!$post->body!!}</p>
	</div>
	<hr>
	<small>Written on {{$post->created_at}}</small>
	<hr>
	<a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>

	<form class="float-right" method="post" action="{{ route('posts.destroy', $post->id) }}">
		@csrf
		@method('DELETE')
		<button type="submit" class="btn btn-danger">Delete Post</button>
	</form>
@endsection