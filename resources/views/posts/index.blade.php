@extends('layouts.app')

@section('content')
	<h3>Posts</h3>
	@if(count($posts) > 0)
		@foreach($posts as $post)
			<div class="card p-5">
				<h5><a href="/posts/{{$post->id}}">{{$post->title}}</a></h5>
				<small>Written on {{$post->created_at}}</small>
			</div>
		@endforeach
		{{-- {{ $posts->links() }} --}}
	@else
		<p>No posts found</p>
	@endif
@endsection