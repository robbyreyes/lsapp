@extends('layouts.app')

@section('content')
	
	<div class="jumbotron text-center" role="alert">
		<h1>Welcome to Laravel!</h1>
		<p>Index content of the page</p>
		<p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
		   <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
	</div>

@endsection