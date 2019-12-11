@extends('layouts.app')

@section('content')

<div class="container">
	<div class="info">
		<h1>Welcome, today is {{$current_date}}</h1>
  		<br>
  		<p> username: {{$username}}</p>
	</div> 
	<div>
		<a href="{{ route('show') }}">Click me to see your variables</a>
	</div>
</div>
@endsection
